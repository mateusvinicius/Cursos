<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index(){

      
    

        return view('dashboard.pages.all_users',['usuarios'=> User::all()]);
    }




    public function create(){

        return view('dashboard.pages.create_users');
    }
}
