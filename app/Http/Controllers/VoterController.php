<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\VoterController;
use App\Models\Voter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class VoterController extends Controller
{
    //
    public function create() {
        // $voters = Voter::all();
        return view('voters.create');
    }

    public function store(Request $request) {
        $valid = $request->validate([
            'voterId' => 'max:255|min:5',
            'password' => 'min:5',

        ]);
        Voter::create(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Voter Created');


    }

    public function edit($id) {
        $voter = Voter::findOrFail($id);
        return view('voters.edit');
    }

    public function update(Request $request, $id) {
        $voter = Voter::findOrFail($id);
        $valid = $request->validate([
            'voterId' => 'max:255|min:5',

            'password' => 'min:5',

        ]);
        $voter->update(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Voter Updated');
    }

    public function destroy($id){
        $voter = Voter::findOrFail($id);
        $voter->delete();
        return redirect()->route('home')->with('message', 'Voter Deleted');
    }
}






