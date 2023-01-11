<?php

namespace App\Http\Controllers\Api;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VotesController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'contestant_id' => 'required|integer|exists:contestant,id',
        ]);

        $contestant_id = $request->contestant_id;

        $user = auth()->user();

        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->contestant_id = $contestant_id;
        $vote->save();

        return response()->json([
            
            'message' => 'vote successful'

        ]);
    }


}
