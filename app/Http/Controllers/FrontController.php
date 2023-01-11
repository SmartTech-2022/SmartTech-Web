<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Users;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        return 'Index page';




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
