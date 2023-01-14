<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                Auth::login($user,true);
                return redirect()->route('home');
            }
        }
    }

    public function logout()
    {
            Auth::logout();
            return redirect()->route('home');


    }

    public function registerIndex(Request $request)
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'passwordConfirm' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required|unique:users,phone_number'
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $passwordConfirm = $request->passwordConfirm;
        $phoneNumber = $request->phoneNumber;
        if($password === $passwordConfirm){
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phone_number = $phoneNumber;
            $user->password = Hash::make($password);
            $user->save();
            return redirect()->route('login.index');
        }
    }


}
