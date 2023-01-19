<?php

namespace App\Http\Controllers\Adminpanel;

use App\Models\User;
use Illuminate\Support\Str;
 use App\Http\Controllers\Adminpanel\UserController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //


    public function create() {
        $users = User::all();
        // return view('users.create', ['users' => $users]);
        return view('users.create');

    }

    public function store(Request $request) {
        // dd($request->input('title'), $request->ip());
        $valid = $request->validate([
            'name' => 'max:255|min:5|required|string',
            'email' => 'min:5|email|unique:users,email',
            'phone_number' => 'min:11|integer',
            'password' => 'min:6',

        ]);

        $voter_id = 'SMT'.strtoupper(Str::random(3)).'/'.rand(10000,99999);
        $user = User::create(array_merge($valid, ['voter_id'=>$voter_id, 'password' => bcrypt($valid['password'])]));
        // dd($valid);
        Mail::to($user)->send(new UserCreated($user, $valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Account Created');


    }





    public function edit($id) {
        $user = User::findOrFail($id);
        return view('users.edit');
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $valid = $request->validate([
            'name' => 'max:255|min:5',
            'email' => 'min:5',
            'phone number' => 'min:10',
            'password' => 'min:5',
        ]);
        $user->update(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'User Updated');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('home')->with('message', 'User Deleted');
    }


    public function login(){
        return view('users.login');
    }
}


