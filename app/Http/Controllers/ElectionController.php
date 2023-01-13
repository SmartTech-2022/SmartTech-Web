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
use Illuminate\Pagination\Paginator;

class ElectionController extends Controller
{
    /**
     *
     * @return view
     */



         public function index(){
             Paginator::useBootstrap();
             $elections = Election::paginate(2);
             return view('elections.index', ['elections' => $elections]);

         }

         public function create(){
             return view('elections.create');

         }

         public function store(Request $request){
             $valid = $request->validate([
                 'name' => 'required',
                 'active' => 'required',

             ]);
             Election::create($valid);
             return redirect()->back()->with('message', 'election created');
         }

         public function show($name){
             $election = Election::where('name', $name)->first();
             return view('election', ['election' => $election]);
         }

         public function edit($id){
             $election = Election::findOrFail($id);
             return view('elections.edit', ['election'=> $election]);
         }

         public function update(Request $request, $id){
             $election = Election::find($id);
             $valid = $request->validate([
                 'name' => 'required|unique:elections',
                 'active' => 'required'
             ]);

             $election->update([
                 'name' => $request->name,
                 'active' => $request->active,
             ]);
             return redirect()->back()->with('message', 'Election Updated');
         }
         public function destroy($id){
             $election = Election::find($id);
             $election->delete();
             return redirect()->back()->with('messaged', 'Election deleted');

         }
     }








