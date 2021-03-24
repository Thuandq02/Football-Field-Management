<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormLogin;
use App\Http\Requests\FormRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function showLogin(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('backend.account.login');
    }

    public function login(FormLogin $request){
        $auth = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $rememberme = $request->checkbox == "on";
        if (Auth::attempt($auth, $rememberme)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            Session::flash('error', 'Email or password is incorrect');
            return redirect()->route('login.index');
        }
    }
    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }

    public function showRegister(){
        return view('backend.account.register');
    }

    public function register(FormRegister $request){
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login.index');
    }
}
