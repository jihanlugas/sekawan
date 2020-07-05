<?php

namespace App\Http\Controllers;

use App\Photoupload;
use App\User;
use App\Usertree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        for ($level = 1; $level <= Usertree::USERTREE_LEVEL_LIMIT; $level++){
            $mUsertrees[$level] = Usertree::with(['user'])
                ->where('parent_id', $mUser->id)
                ->where('parent_level', $level)
                ->orderBy('parent_level', 'ASC')->get();

            foreach ($mUsertrees[$level] as $i => $mUsertree){
                $mUsertrees[$level][$i]->photo = Photoupload::getFilepath($mUsertree->photo_id);
            }
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

}
