<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype == '1'){
            return view ('admin.home'); #Procure pela view home na pasta admin
        }else{
            return view ('dashboard');
        }
    }

    public function index(){
        return view('User.home');
    }
}
