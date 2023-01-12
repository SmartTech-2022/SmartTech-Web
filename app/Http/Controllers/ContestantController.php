<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\ContestantController;
use App\Models\Contestant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContestantController extends Controller
{
    //
    public function create() {

        return view('contestants.create');
    }

    public function store(Request $request) {
        $valid = $request->validate([
            'Contestant->name' => 'max:255|min:5',
            'Election->name' => 'min:5',

        ]);
        Contestant::create(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Contestant Created');


    }

    public function edit($id) {
        $contestant = Contestant::findOrFail($id);
        return view('Contestants.edit');
    }

    public function update(Request $request, $id) {
        $contestant = Contestant::findOrFail($id);
        $valid = $request->validate([
            'Contestant->name' => 'max:255|min:5',
            'Election->name' => 'min:5',

        ]);
        $contestant->update(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Contestant Updated');
    }

    public function destroy($id){
        $contestant = Contestant::findOrFail($id);
        $contestant->delete();
        return redirect()->route('home')->with('message', 'Contestant Deleted');
    }
}










