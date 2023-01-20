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

    public function loginUser(Request $request) {
        try {
            //code...
            $validateUser = Validator::make($request->all(),
                [
                    'voter_id' => 'required|string',
                    'password' => 'required'
                ]);

                if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation Error',
                    'errors' => $validateUser->errors()
                ], 401);
                }

                if(!Auth::attempt($request->only(['voter_id', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Voter ID or Password does not match with our record.'
                ], 401);
                }

            $user = User::where('voter_id', $request->voter_id)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}
