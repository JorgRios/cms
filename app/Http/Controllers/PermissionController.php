<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
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
        $this->authorize('permission.index'); //index edit create show destroy
        $permisos = Permission::all();
        return view('layouts.admin.permissions.index',compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('permission.create'); //index edit create show destroy
        return view('layouts.admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('permission.create'); //index edit create show destroy
        $datafill = $request->validate([
            'name' => 'required|min:4',
            'description' => 'required|min:10'
        ]);
        Permission::create($datafill);
        toastr()->success('Permiso creado correctamente');
        return redirect()->intended('/permission');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('permission.edit'); //index edit create show destroy
        $permiso = Permission::find(decode($id));
        if($permiso){
            return view('layouts.admin.permissions.edit', compact('permiso'));
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
        $this->authorize('permission.edit'); //index edit create show destroy
        $datafill = $request->validate([
            'name' => 'required|min:4',
            'description' => 'required|min:10'
        ]);
        $permiso = Permission::find(decode($id));
        $permiso->update($datafill);
        toastr()->success('Permiso actualizado correctamente');
        return redirect()->intended('/permission');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('permission.destroy'); //index edit create show destroy
        $permiso = Permission::find(decode($id));
        if($permiso){
            $permiso->delete();
            toastr()->warning('Elemento eliminado');
            return back();
        }
        toastr()->error('Permiso no encontrado');
        return back();
    }
}
