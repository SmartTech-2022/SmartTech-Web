<?php

namespace App\Http\Controllers\Adminpanel;
use App\Models\User;

use App\Models\Vote;
use App\Models\Users;

use App\Models\Election;
use App\Models\Contestant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{

    // public function  home(){
    //     return view('users.create');
    // }


    public function index(){
        return view('index');

    }


    public function adminindex() {
        // return view('admin.index');
        $total_contestants = Contestant::count();
        $total_voters = User::where('ís_Admin', 0)->count();
        $total_election = Election::count();
        $total_votes = Vote::count();

            return view('admin.index',[
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
