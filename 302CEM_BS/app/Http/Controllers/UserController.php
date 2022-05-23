<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function printUser(){
        $users = DB::table('users')->get();
        return view('welcome',compact('users'));
    }
  
    public function insert(Request $request){
        
        // Validation for Form Database
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');

        $data=array(
            "username"=>$username,
            "password"=>$password,
            "name"=>$name,
            "email"=>$email,
            "address"=>$address);

        DB::table('users')->insert($data);
            
        return redirect()-> route('/login');

        }
}