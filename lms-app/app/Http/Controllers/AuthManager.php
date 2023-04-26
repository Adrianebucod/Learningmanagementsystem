<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view('login.login');
    }
    function registration(){
        return view('registration.registration');
    }

   function loginPost(Request $request){
       $credentials=$request->validate([
           'email'=>'required|email',
            'password'=>'required|min:5|max:12'
            ]);
            Session::start(); //Start the session
            $user = User::where('email','=',$request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)) {
                    $request->session()->put('loginId', $user->id);
                    return redirect('admin')->with('success','Login Successfully.');
                }else{
                    return back()->with('error','Password not matched.');
                }
            }else{
                return back()->with('error','This email is not registered.');
            }
    } 

    function registrationPost(Request $request){
        $request->validate(['name'=>'required',
                            'email'=>'required|email|unique:users',
                            'password'=>'required|min:5|max:12',
                            'role'=>'required',
                           ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()->with('error','Something wrong');
        }
    }

    function logout(){
        Session:flush();
        Auth:logout();
        return redirect(route('/login'));
    }


    
}