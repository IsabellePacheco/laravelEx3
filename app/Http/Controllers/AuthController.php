<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index ()
    { 
        return view('users.index'); 
    }

    public function showLoginForm () { return view('users.login'); }

    public function login(Request $request){
        $credentials = $request->validate(['email'=>'required|email','password'=>'required']);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email'=>'Credenciais inválidas.']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.form');
    }

    public function dashboard(){ return view('dashboard'); }

    public function showForgotForm(){ return view('users.forgot'); }

    public function sendResetLink(Request $request){
        $request->validate(['email'=>'required|email']);
        $status = Password::sendResetLink($request->only('email'));
        return $status===Password::RESET_LINK_SENT
            ? back()->with(['status'=>__($status)])
            : back()->withErrors(['email'=>__($status)]);
    }

    public function showResetForm(Request $request,$token){
        return view('reset',['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'token'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed'
        ]);
        $status = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function($user,$password){
                $user->forceFill(['password'=>bcrypt($password),'remember_token'=>Str::random(60)])->save();
                event(new PasswordReset($user));
            }
        );
        return $status===Password::PASSWORD_RESET
            ? redirect()->route('login.form')->with('status',__($status))
            : back()->withErrors(['email'=>[__($status)]]);
    }
}
