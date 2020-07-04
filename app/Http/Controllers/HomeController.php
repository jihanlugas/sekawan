<?php

namespace App\Http\Controllers;

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
            $mUsertrees[$level] = Usertree::with(['user', 'photoupload'])
                ->where('parent_id', 15)
                ->where('parent_level', $level)
                ->orderBy('parent_level', 'ASC')->get();
        }


//        dd($mUsertrees);

        return view('home.request', ['mUser' => $mUser, 'mUsertrees' => $mUsertrees]);
    }

}
