<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\ElectionController;
use App\Models\Election;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ElectionController extends Controller
{
    /**
     *
     * @return view
     */




        //
        public function create() {
            // $voters = Voter::all();
            return view('elections.create');
        }

        public function store(Request $request) {
            $valid = $request->validate([
                'Election->name' => 'min:5',
                'Election->status' => 'min:5',

            ]);
           Election::create(array_merge($valid));
            return redirect()->back()->withInput($request->input())->with('message', 'Election Created');


        }

        public function edit($id) {
            $election = Election::findOrFail($id);
            return view('Elections.edit');
        }

        public function update(Request $request, $id) {
            $election = Election::findOrFail($id);
            $valid = $request->validate([
                'Election->name' => 'min:5',
                'Election->status' => 'min:5',

            ]);
            $election->update(array_merge($valid));
            return redirect()->back()->withInput($request->input())->with('message', 'Election Updated');
        }

        public function destroy($id){
            $election = Election::findOrFail($id);
            $election->delete();
            return redirect()->route('home')->with('message', 'Election Deleted');
        }
    }








