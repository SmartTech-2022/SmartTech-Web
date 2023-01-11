<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($validatedData)) {
            return response()->json(['message' => 'Email or Password not correct'], 401);
        }

        return response()->json(["message" => "Login Sucessful", "user" => auth()->user(), 'token' => auth()->user()->createToken(config('app.key'))->plainTextToken,]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {

            return response()->json(['message' => 'Registration Error', 'errors' => $validator->errors()->all()], 401);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);

        return response()->json(["message" => "Registration Successful", "user" => auth()->user(), 'token' => auth()->user()->createToken(config('app.key'))->plainTextToken,]);
    }
}
