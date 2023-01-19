<?php


namespace App\Http\Controllers\Adminpanel;

use App\Models\Election;
use App\Models\Contestant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContestantController extends Controller
{
    //
    public function create()
    {
        $elections = Election::all();
        return view('contestants.create',[
            'elections' => $elections
        ]);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' =>  'required',
            'about' =>  'required',
            'election_id' =>  'required'
        ]);
        Contestant::create(array_merge($valid));
        return redirect()->back()->withInput($request->input())->with('message', 'Contestant Created');
    }
    public function show()
    {
        $contestants = Contestant::all();
        return view('contestants.index', ['contestants', $contestants]);
    }

    public function edit($id)
    {
        $contestant = Contestant::findOrFail($id);
        return view('Contestants.edit');
    }

    public function update(Request $request, $id)
    {
        $contestant = Contestant::findOrFail($id);
        $valid = $request->validate([
            'Contestant_name' => 'max:255|min:5', 'required',
            'Election_name' => 'min:5', 'required'

        ]);
        $contestant->update(array_merge($valid));
        // return redirect()->route('home')->withInput($request->input())->with('message', 'Contestant Created Successfully');
        return redirect()->route('home')->with('message', 'Contestant Created Successfully');
    }

    public function destroy($id)
    {
        $contestant = Contestant::findOrFail($id);
        $contestant->delete();
        return redirect()->route('home')->with('message', 'Contestant Deleted');
    }
}
