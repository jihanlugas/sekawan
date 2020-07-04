<?php

namespace App\Http\Controllers;

use App\User;
use App\Userdetail;
use App\Usertree;
use App\Photoupload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Traits\UsertreeTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

//use App\Http\Traits\PhotouploadTrait;


class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    use UsertreeTrait;

    protected function completedatavalidator(array $data)
    {
        return Validator::make($data, [
            'bank_id' => ['required', 'numeric'],
            'bank_account_number' => ['required', 'string', 'min:5'],
            'bank_account_name' => ['required', 'string'],
            'birth_dt' => ['required', 'date'],
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('unregistration');
    }

    public function registration()
    {
        if (!Auth::user()->request_by) {
            return redirect(route('invitation'));
        }

        $mUsertrees = Usertree::with(['parent', 'photoupload'])
            ->where('user_id', Auth::user()->id)
            ->where('status_photo', '!=', Usertree::STATUS_PHOTO_APPROVED)
            ->where('status_photo', '!=', Usertree::STATUS_PHOTO_AUTOMATIC_APPROVED)
            ->get();


        if (count($mUsertrees)) {
            return redirect(route('upload'));
        }

        return redirect(route('completedata'));
    }

    public function invitation()
    {
        return view('registration.invitation');
    }

    public function postinvitation(Request $request)
    {
        $mUser = User::where('id', Auth::user()->id)->first();
        $mUserinvitation = User::where('invitation_cd', $request->invitation_cd)->first();

        if ($mUser && $mUserinvitation) {
            $mUserrequestlimit = User::where('request_by', $mUserinvitation->id)->get();
            if (count($mUserrequestlimit) < User::USER_REQUEST_LIMIT) {
                DB::beginTransaction();
                try {
                    $mUser->request_by = $mUserinvitation->id;
                    $mUser->save();
                    $this->generateUsertree($mUser->id);

                    DB::commit();
                    return redirect()->route('upload')->with('alert-success', 'Berhasil Menambahkan Invitation Code!');
                } catch (Throwable $e) {
                    DB::rollBack();
                    dd($e);
//                    return redirect()->route('invitation')->with('alert-danger', 'Sorry, Somehing Going Wrong');
                }
            } else {
                return redirect()->route('invitation')->with('alert-danger', 'Sorry, Invitaion Code Has Reached Limit');
            }
        } else {
            return redirect()->route('invitation')->with('alert-danger', 'Sorry, Invitation Code Not Valid!');
        }
    }

    public function upload()
    {
//        $mUser = User::with(['userdetail.bank'])->where('id', 2)->get();
//        dd($mUser);
        $mUsertrees = Usertree::with(['parent.userdetail.bank', 'photoupload'])->where('user_id', Auth::user()->id)->get();
        $complete = true;
        $now = new \DateTime();
        foreach ($mUsertrees as $i => $mUsertree) {
            if (($mUsertrees[$i]->status_photo == Usertree::STATUS_PHOTO_WAITING) && (Carbon::make($mUsertrees[$i]->updated_at)->addDay(Usertree::LIMIT_WAITING_DAY) <= Carbon::now())) {
                $mUsertrees[$i]->status_photo = Usertree::STATUS_PHOTO_AUTOMATIC_APPROVED;
                $mUsertrees[$i]->save();
            }

            if (!(($mUsertrees[$i]->status_photo == Usertree::STATUS_PHOTO_APPROVED) || ($mUsertrees[$i]->status_photo == Usertree::STATUS_PHOTO_AUTOMATIC_APPROVED))) {
                $complete = false;
            }

            $mUsertrees[$i]->status_photo = Usertree::$status_photo[$mUsertrees[$i]->status_photo];
            $mUsertrees[$i]->photo = Photoupload::getFilepath($mUsertree->photo_id);
        }

        return view('registration.upload', ['mUsertrees' => $mUsertrees, 'complete' => $complete]);
    }

    public function postupload(Request $request)
    {
        $vResult['status'] = false;
        $vResult['message'] = 'Somethink Wrong Plese Try Again';

        if ($request) {
            DB::beginTransaction();
            try {
                $mUsertree = Usertree::where('parent_id', $request->parent_id)
                    ->where('user_id', Auth::user()->id)->first();
                $photo_id = Photoupload::uploadPhoto($request->photo_id, $mUsertree->id);

                $mUsertree->photo_id = $photo_id;
                $mUsertree->status_photo = Usertree::STATUS_PHOTO_WAITING;
                $mUsertree->save();

                $data = Usertree::with(['parent', 'photoupload'])->where('id', $mUsertree->id)->first();
                $data['photo'] = Photoupload::getFilepath($data->photo_id);
                $data['status_photo'] = Usertree::$status_photo[$data->status_photo];

                $vResult['status'] = true;
                $vResult['message'] = 'Success';
                $vResult['data'] = $data;
                DB::commit();
            } catch (Throwable $e) {
                DB::rollBack();
                dd($e);
            }
        }

        return response()->json($vResult);
    }

    public function completedata()
    {
        $mUser = User::with(['userdetail'])->where('id', Auth::user()->id)->first();
        return view('registration.completedata', ['mUser' => $mUser]);
    }

    public function postcompletedata(Request $request)
    {
        $mUser = User::where('id', Auth::user()->id)->first();
        $mUserdetail = Userdetail::where('user_id', Auth::user()->id)->first();
        if (!$mUserdetail) {
            $mUserdetail = new Userdetail();
            $mUserdetail->user_id = $mUser->id;
        }

        $this->completedatavalidator($request->all())->validate();

        DB::beginTransaction();
        try {
            $mUserdetail->bank_id = $request->bank_id;
            $mUserdetail->bank_account_number = $request->bank_account_number;
            $mUserdetail->bank_account_name = $request->bank_account_name;
            $mUserdetail->birth_dt = $request->birth_dt;
            $mUserdetail->save();

            $mUser->invitation_cd = $mUser->generateInvitationcd();
            $mUser->is_complete = 1;
            $mUser->save();

            DB::commit();

            return redirect(route('successcompletedata'));

            } catch (Throwable $e) {
            DB::rollBack();
            dd($e);
        }

    }

    public function debug()
    {

    }
}
