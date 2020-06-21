<?php

namespace App\Http\Controllers;

use App\User;
//use App\Usertree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Traits\UsertreeTrait;


class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    use UsertreeTrait;


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
        return redirect()->route('invitation')->with('alert-danger', 'Invitation Code Not Valid!');
//        $mUserinvitation = User::where('invitation_cd', $request->invitation_cd)->first();
//        $mUser = User::where('id', Auth::user()->id)->first();
//        if ($mUserinvitation){
////            $mUsertrees = Usertree::where('user_id', $mUserinvitation->id)
////                ->where('is_admin', '!=', 1)
////                ->where('parent_level', '!=', 2)
////                ->get();
////
////            if ($mUsertrees){
////
////                // Admin Lv 1
////                Usertree::create([
////                    'user_id' => $mUser->id,
////                    'parent_id' => 1,
////                    'parent_level' => 1,
////                    'is_admin' => 1,
////                    'confirmation_status' => 0,
////                ]);
////
////                // Atas dari user yang invite
////                foreach ($mUsertrees as $mUsertree){
////                    Usertree::create([
////                        'user_id' => $mUser->id,
////                        'parent_id' => $mUsertree->parent_id,
////                        'parent_level' => $mUsertree->parent_level - 1,
////                        'confirmation_status' => 0,
////                    ]);
////                }
////
////                // User Yg Invite Lv 5
////                Usertree::create([
////                    'user_id' => $mUser->id,
////                    'parent_id' => $mUserinvitation->id,
////                    'parent_level' => 5,
////                    'confirmation_status' => 0,
////                ]);
////            }
//
//
//            $mUser->request_by = $mUserinvitation->id;
//            $mUser->save();
//            return redirect()->route('completeregistration.upload')->with('alert-success', 'Berhasil Menambahkan Invitation Code!');
//        }else{
//            return redirect()->route('completeregistration.requested')->with('alert-danger', 'Invitation Code Not Valid!');
//        }
    }

    public function upload(){
        die('upload');
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
