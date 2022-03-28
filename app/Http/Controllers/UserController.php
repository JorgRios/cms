<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $this->authorize('user.index');
        $usuarios = User::all();
        return view('layouts.admin.users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $this->authorize('user.create');
        $roles = Role::all()->pluck('name','id');
        return view('layouts.admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datafill = request()->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required',
            'adress' => 'required|min:10',
        ]);
        if(\Auth::user()){
            $this->authorize('user.create');
        }
        $datafill['password'] = bcrypt($request->password);
        $user = User::create($datafill);
        $user->assignRole($request->roles);
        toastr()->success('Usuario Creado Correctamente');
        return redirect()->intended('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('user.edit');
        $usuario = \App\Models\User::find(decode($id));
        if($usuario){
            $roles = Role::all()->pluck('name','id');
            return view('layouts.admin.users.edit',compact('usuario','roles'));
        }
        toastr()->error('No se encontro el usuario');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('user.edit');
        $datafill = request()->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'adress' => 'required|min:10',
        ]);
        $user = \App\Models\User::find(decode($id));
        if($user){
            if($request->password){
                $datafill['password'] = bcrypt($request->password);
            }
            $user->update($datafill);
            if($request->role){
                $user->syncRoles($request->role);
            }
            toastr()->success('Usuario actualizado correctamente');
            return redirect()->intended('/user');
        }
        toastr()->error('No se encontro el usuario');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
