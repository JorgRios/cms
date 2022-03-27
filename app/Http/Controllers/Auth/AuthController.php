<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->hasPermissionTo('main.show')){
                return redirect()->intended('home');
            }else{
                return redirect()->intended('/');
            }
        }
        toastr()->error('Por favor revise sus datos de ingreso','Error al ingresar');
        return back();
    }

    public function logout(){
        return "cerrando session";
    }
}
