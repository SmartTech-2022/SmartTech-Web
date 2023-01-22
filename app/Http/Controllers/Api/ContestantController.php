<?php

namespace App\Http\Controllers\Api;

use App\Models\Contestant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContestantController extends Controller
{

        public function show($id)
        {
            $contestant = Contestant::findOrFail($id);
            // return view('contestants.show', ['contestant' => $contestant]);
            return response()->json([
                'success' => true,
                'data' => $contestant
            ]);
    }
}


