<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(){
        return view("Auth.reg");
    }


    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'avatar'=> 'image:jpg,png,webp',
            'facebook'=> 'email',
            'youtube'=> 'email'
        ]);
        $path = null;
        if($request->has('avatar')){
            $path = $request->file('avatar')->store('/');


        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'avatar' => $path,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,

        ]);

        return view('Auth.login');




    }



    public function login(Request $request){

        if(Auth::attempt(['email'=>$request->email , 'password'=>$request->password])){
            return view('welcome');

        }else{
            return "your are not authorizes";
        }


    }



    public function logout(){
       Auth()->logout();
      return view('welcome');
    }


    public function singin(){
          return view('Auth.login');

    }


}
