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
use Illuminate\Pagination\Paginator;


class ContestantController extends Controller
{
    //

    public function index()
    {
        // Paginator::useBootstrap();
        $contestants = Contestant::all();

        $election = Election::paginate();

        return view('elections.election', ['contestants'=>$contestants],['elections' => $election] ['election']);

    }
    public function create()
    {
        $elections = Election::all();
        $contestants = Contestant::all();
        return view('contestants.create',[
            'elections' => $elections, 'contestants'=>$contestants, ]);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' =>  'required',
            'about' =>  'required',
            'election_id' =>  'required'
        ]);
        Contestant::create(array_merge($valid));
        return redirect()->route('election.home')->with('message', 'Contestant Created Successfully');
    }

    public function show($id){
        $election = Election::where('id', $id)->with('contestant')->first();
        // dd($election);
        //  $election = Election::where('name', $name)->first();
         return view('elections.election', ['elections' => $election]);
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
            'name' => 'max:255|min:5', 'required',
            'election_id' => 'min:5', 'required'

        ]);
        $contestant->update(array_merge($valid));
        // return redirect()->route('home')->withInput($request->input())->with('message', 'Contestant Created Successfully');
        return redirect()->route('election.home')->with('message', 'Contestant Updated Successfully');
    }

    public function destroy($id)
    {
        $contestant = Contestant::findOrFail($id);
        $contestant->delete();
        return redirect()->route('election.home')->with('message', 'Contestant Deleted');
        // return redirect()->route('home')->with('message', 'Contestant Deleted');
    }
}
