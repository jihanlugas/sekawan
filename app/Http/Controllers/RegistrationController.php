<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('unregistration');
    }

    public function registration(){
        die('registration');
    }

    public function invitation(){
        die('invitation');
    }

    public function upload(){
        die('upload');
    }
}
