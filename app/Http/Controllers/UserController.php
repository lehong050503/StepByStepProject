<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $reg) {
        // return $reg->input();
        $user = User::where(['email'=>$reg->email])->first();
        // return $user->password; 
        if(!$user || Hash::check($reg->password,$user->password)) {
            return "Username or password is not matched";
        }else{
            $reg->session()->put('user',$user);
            return redirect('/');
        }
    }
}
