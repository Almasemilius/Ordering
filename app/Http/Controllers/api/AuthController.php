<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Error;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AuthController extends Controller
{
    public function postUser(Request $request)
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
            return response()->json($user);
        }else{
            return response()->json(['error'=> "Passwords do not match"],500);
        }
    }

    public function getUsers(Request $request)
    {
        $limit = $request->limit;
        $data = User::query();

        $data = $data->paginate($limit ? $limit : 25);

        return response()->json($data);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email',
        ]);
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email',$email)->first();

        if($user){
            $passwordCheck = Hash::check($password,$user->password);
            if($passwordCheck){
                $token = $user->createToken('login');
                $data = ['token' => $token, 'user' => $user];

                return response()->json($data);
            }
        }
    }

    public function logout(Request $request)
    {
        $userId = $request->userId;
        $user = User::findOrFail($userId);
        $user->tokens()->delete();
        return response()->json("Logged Out");
    }
}
