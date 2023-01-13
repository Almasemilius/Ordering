<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user){
            $checkPassword = Hash::check($request->password,$user->password);
            if($checkPassword){
                dd("Logged In");
            }
        }
    }
}
