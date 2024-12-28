<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::first();
        return view('admin.users.index', 
        
        /*formas de passar um usuario para o html */ 
     // ['user' => $user]
        compact('user')
    );
    }
}
