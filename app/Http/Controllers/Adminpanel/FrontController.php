<?php

namespace App\Http\Controllers\Adminpanel;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\Adminpanel\FrontController;
use App\Models\User;
use App\Models\Users;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    // public function  home(){
    //     return view('users.create');
    // }


    public function index(){
        return view('index');

    }


    public function adminindex() {
        return view('admin.index');
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
