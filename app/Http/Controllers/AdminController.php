<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;

class AdminController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function dashboard() 
    {
        $users = User::all();
        return view('admin/dashboard', [
            'users' => $users
        ]);
    }

    public function skills() 
    {
        
    }
}
