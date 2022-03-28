<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('role.index');
        $roles = Role::all();
        return view('layouts.admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('role.create');
        $permisos = Permission::all()->pluck('name','id');
        return view('layouts.admin.roles.create',compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('role.create');
        $datafill = $request->validate([
            'name' => 'required|min:4',
        ]);
        $rol = Role::create($datafill);
        $rol->givePermissionTo($request->permissions);
        toastr()->success('Rol creado correctamente');
        return redirect()->intended('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('role.show');
        $rol = Role::find(decode());
        if($rol){
            return view('layouts.admin.roles.show', compact('rol'));
        }
        toastr()->error('No se encontro el rol');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('role.edit');
        $rol = Role::find(decode($id));
        if($rol){
            $permisos = Permission::all()->pluck('name','id');
            return view('layouts.admin.roles.edit',compact('permisos','rol'));
        }
        toastr()->error('No se encontro el rol');
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
        $this->authorize('role.edit');
        $datafill = $request->validate([
            'name' => 'required|min:4',
        ]);
        $rol = Role::find(decode($id));
        $rol->update($datafill);
        $rol->givePermissionTo($request->permissions);
        toastr()->success('Rol actualizado correctamente');
        return redirect()->intended('/role');
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
