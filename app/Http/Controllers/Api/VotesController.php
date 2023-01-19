<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VotesController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
        $data = Validator::make( $input, [
            'contestant_id' => 'required|integer|exists:contestants,id',
            'election_id' => 'required|integer|exists:elections,id',
            'voter_id' => 'required|exists:users,voter_id',
        ]);

        if($data->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $data->errors(),
            ], 422);
        }
        $user = User::where('voter_id', $input['voter_id'])->first();
        $contestant_id = $input['contestant_id'];
        $election_id = $input['election_id'];
        if ($user->votes()->where('election_id', $election_id)->where('contestant_id', $contestant_id)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Oga u don vote ',
                'errors' => 'Oga u don vote ',
            ], 202);
        }
      $vote =  $user->votes()->create([
            'election_id' => $input['election_id'],
            'contestant_id' => $input['contestant_id'],

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Oga u don vote successful ',
            'data' => $vote,
        ], 200);

    }


}
