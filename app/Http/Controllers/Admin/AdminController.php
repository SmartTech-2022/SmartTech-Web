<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\UserCreated;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class AdminController extends Controller
{
    //
    public function registerUser(Request $request)
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
        $user->voter_id = 'SMT'.strtoupper(Str::random(3)).'/'.rand(10000,99999);
        $user->save();
        Mail::to($user)->send(new UserCreated($user));


        // Auth::login($user);

        // return response()->json(["message" => "Registration Successful", "user" => auth()->user(), 'token' => auth()->user()->createToken(config('app.key'))->plainTextToken,]);
    }
}
