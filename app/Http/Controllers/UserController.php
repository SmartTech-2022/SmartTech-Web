<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


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
            'name' => 'max:255|min:5',
            'email' => 'min:5',
            'phone number' => 'min:10',
            'password' => 'min:5',

        ]);
        User::create(array_merge($valid));
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


