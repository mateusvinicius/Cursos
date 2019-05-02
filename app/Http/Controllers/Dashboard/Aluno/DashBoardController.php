<?php

namespace App\Http\Controllers\Dashboard\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    

    public function index(){

        return view('Aluno.home');
    }
}
