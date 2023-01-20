<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use App\Models\User;
use App\Models\Users;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
    $total_contestants = Contestant::count();
    $total_voters = User::where('is_Admin', 0)->count();
    $total_election = Election::count();
    $total_votes = Votes::count();

        return view('index',[
            'total_contestants' => $total_contestants,
            'total_voters' => $total_voters,
            'total_election' => $total_election,
            'total_votes' => $total_votes,
        ]);
    }



    public function about(){
        return 'about page';

    }

    public function show($id){
                return view('user', ['user' => $user]);

    }

    public function contact(){
        return'contact page';
    }
}
