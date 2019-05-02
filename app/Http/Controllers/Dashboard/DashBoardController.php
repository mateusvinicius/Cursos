<?php

namespace App\Http\Controllers\Dashboard;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{

    
    

    public function index(){

        return view('dashboard.pages.home');
    }


    public function logout(){
        Auth::logout();
        return redirect('/login');

    }
}
