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
            'voter_id' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Attempt to authenticate the user
        $user = User::where('voter_id', $request->input('voter_id'))->first();

        if(!Hash::check($request->input('password'), $user->password)){
            return response()->json(['message' => 'Voter id does not exist'], 401);
        }
        
        Auth::login($user);

        return response()->json(["message" => "Login Successful", "user" => auth()->user(), 'token' => auth()->user()->createToken(config('app.key'))->plainTextToken,]);
    }


}
