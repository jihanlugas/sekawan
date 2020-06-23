<?php

namespace App\Http\Controllers;

use App\User;
//use App\Usertree;
use App\Usertree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Traits\UsertreeTrait;
use App\Http\Traits\PhotouploadTrait;


class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    use UsertreeTrait;
    use PhotouploadTrait;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('unregistration');
    }

    public function registration(){
//        dd(Auth::user());
        if (!Auth::user()->request_by){
            return redirect(route('invitation'));
        }

        if (!Auth::user()->is_complete){
            return redirect(route('upload'));
        }
    }

    public function invitation(){
        return view('registration.invitation');
    }

    public function postinvitation(Request $request){
        $mUser = User::where('id', Auth::user()->id)->first();
        $mUserinvitation = User::where('invitation_cd', $request->invitation_cd)->first();

        if ($mUser && $mUserinvitation){
            $mUserrequestlimit = User::where('request_by', $mUserinvitation->id)->get();
            if (count($mUserrequestlimit) < User::USER_REQUEST_LIMIT){
                $mUser->request_by = $mUserinvitation->id;
                $mUser->save();
                $this->generateUsertree($mUser->id);
                return redirect()->route('upload')->with('alert-success', 'Berhasil Menambahkan Invitation Code!');
            }else{
                return redirect()->route('invitation')->with('alert-danger', 'Sorry, Invitaion Code Has Reached Limit');
            }
        }else{
            return redirect()->route('invitation')->with('alert-danger', 'Sorry, Invitation Code Not Valid!');
        }
    }

    public function upload(){
        $mUsertrees = Usertree::with('user')->where('user_id', Auth::user()->id)->get();

        return view('registration.upload', ['mUsertrees' => $mUsertrees]);
    }

    public function postupload(Request $request){
        if ($request->photo_id){
            foreach ($request->photo_id as $i => $data){
                $mUsertree = Usertree::where('parent_id', $i)
                    ->where('user_id', Auth::user()->id)->first();
                $photo_id = ($this->uploadPhoto($data));

                $mUsertree->photo_id = $photo_id;
                $mUsertree->save();
            }
            die('aye');
        }else{
            return redirect()->route('completeregistration.upload');
        }
    }

    public function debug(){
        $mUsers = User::where('request_by', '!=', '1')
            ->where('request_by', '!=', 'NULL')
            ->get();


        foreach ($mUsers as $i => $mUser){
            $this->generateUsertree($mUser->id, $mUser->request_by);
        }
    }
}
