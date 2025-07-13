<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function register(Request $request)
    {
        $new_user= new User();
        $new_user->name = $request->input('name');
        $new_user->email = $request->input('email');
        $new_user->password = Hash::make($request->input('password'));
        $new_user->save();
        return $new_user; // Return the newly created user for confirmation
    }

    public function login(Request $request){
     $user = User::where('email', $request->input('email'))->first();
     if(!$user || !Hash::check($request->input('password'), $user->password)){
         return ['error' => 'Email or Password is not matched'];
     }
     return $user; // Return a success message with user info
 }
}
