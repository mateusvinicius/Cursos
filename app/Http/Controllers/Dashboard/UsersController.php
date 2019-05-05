<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    public function index(){

      
    

        return view('dashboard.pages.all_users',['usuarios'=> User::all()]);
    }




    public function create(){

        return view('dashboard.pages.create_users');
    }


    public function store(Request $request){
        return $this.validator($request->all())->validate();
     

      
   
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'val-username2' => ['required', 'string', 'max:255'],
            'val-email2' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'val-password2' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
