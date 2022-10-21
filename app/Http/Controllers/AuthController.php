<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->is_admin == 1){
                return redirect()->route('admin.index');
            }
            else{
                return redirect()->route('home');
            }
            
        }
        else{
          return back()->with('error','Wrong Login Details');
        }

        return redirect('loginFail')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
