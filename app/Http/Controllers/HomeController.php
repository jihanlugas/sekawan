<?php

namespace App\Http\Controllers;

use App\User;
use App\Usertree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $mUsertrees = Usertree::with(['user', 'photoupload'])
            ->where('parent_id', 15)
            ->orderBy('parent_level', 'ASC')->get();

//        dd($mUsertrees);

        return view('home.request', ['mUser' => $mUser, 'mUsertrees' => $mUsertrees]);
    }

}
