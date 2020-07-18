<?php

namespace App\Http\Controllers;

use App\Photoupload;
use App\Price;
use App\User;
use App\Usertree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Helpers\Formater;

class HomeController extends AuthController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function successcompletedata()
    {
        $mUser = User::where('id', Auth::user()->id)->first();
        return view('home.successcompletedata', ['mUser' => $mUser]);
    }

    public function index()
    {
        return view('home.home');
    }

    public function request()
    {
        $mUser = User::where('id', Auth::user()->id)->first();
        $mPrice = Price::where('is_active', 1)->first();
        for ($level = 1; $level <= Usertree::USERTREE_LEVEL_LIMIT; $level++){
            $mUsertrees[$level] = Usertree::with(['user'])
                ->where('parent_id', $mUser->id)
                ->where('parent_level', $level)
                ->orderBy('parent_level', 'ASC')->get();

            $total = $mPrice->non_admin_price * pow(User::USER_REQUEST_LIMIT, (Usertree::USERTREE_LEVEL_LIMIT - $level +1 ));


            $qTotalusertree = DB::selectOne("SELECT sum(prices.non_admin_price) as total_didapat
                                                FROM usertrees
                                                JOIN prices ON prices.id = usertrees.price_id
                                                WHERE parent_id = :pid
                                                AND parent_level = :plv
                                                AND usertrees.status_photo <= :reject
                                                AND usertrees.status_photo >= :waiting",
                                                [
                                                    'pid' => $mUser->id,
                                                    'plv' => $level,
                                                    'reject' => Usertree::STATUS_PHOTO_REJECTTED,
                                                    'waiting' => Usertree::STATUS_PHOTO_WAITING,
                                                ]);


            foreach ($mUsertrees[$level] as $i => $mUsertree){
                $mUsertrees[$level][$i]->photo = Photoupload::getFilepath($mUsertree->photo_id);
            }


            if ($qTotalusertree->total_didapat){
                $mUsertrees[$level]->total_didapat = $qTotalusertree->total_didapat;
            }else {
                $mUsertrees[$level]->total_didapat = 0;
            }
            $mUsertrees[$level]->total = Formater::formatNumber($total);
            $mUsertrees[$level]->belum_didapat = Formater::formatNumber($total - $mUsertrees[$level]->total_didapat);
            $mUsertrees[$level]->total_didapat = Formater::formatNumber($mUsertrees[$level]->total_didapat);

        }

        return view('home.request', ['mUser' => $mUser, 'mUsertrees' => $mUsertrees]);
    }

    public function postrequest(Request $request){
        $vResult['status'] = false;

        if ($request){
            $mUser = User::where('id', Auth::user()->id)->first();
            $mUsertree = Usertree::where('parent_id', $mUser->id)
                            ->where('user_id', $request->user_id)->first();

            if ($mUsertree){
                DB::beginTransaction();
                try {
                    $mUsertree->status_photo = $request->status_photo;
                    $mUsertree->save();

                    DB::commit();
                    $vResult['status'] = true;
                    $vResult['user_id'] = $request->user_id;
                    $vResult['status_photo_name'] = Usertree::$status_photo[$mUsertree->status_photo];
                } catch (Throwable $e) {
                    DB::rollBack();
                    dd($e);
                }
            }
        }

        return response()->json($vResult);
    }

    public function profile(){
        $mUser = User::with(['userdetail.bank'])->where('id', Auth::user()->id)->first();

        return view('home.profile', ['mUser' => $mUser]);
    }

}
