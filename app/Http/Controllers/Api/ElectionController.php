<?php

namespace App\Http\Controllers\Api;

use App\Models\Election;
use App\Models\Contestant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectionController extends Controller
{
    public function elections(Request $request){

        $elections = Election::all();

        return response()->json([
            'success' => true,
            'data' => $elections
        ]);
    }

    public function contestants(Request $request){

        $request->validate([
            'election_id' => 'required|integer|exists:elections,id',
        ]);

        $election_id = $request->election_id;
        $election = Election::findOrFail($election_id);
        $contestants = $election->name;
        // $contestants = Contestant::where('election_id', $election);
        // $contestants = $election->contestants;

        return response()->json([
            'success' => true,
            'data' => $contestants
        ]);
    }

    public function show($id){
        $election = Election::where('id',$id)->with('contestant')->first();
        return response()->json([
            'success' => true,
            'data' => $election
        ]);
    }
}
