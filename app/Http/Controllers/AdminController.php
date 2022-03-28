<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * retorna la pantalla principal del administrador
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('layouts.admin.index');
    }
}
