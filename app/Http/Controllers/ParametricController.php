<?php

namespace App\Http\Controllers;

use App\Models\Parametric;
use Illuminate\Http\Request;

class ParametricController extends Controller
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
    public function index(){
        $this->authorize('parametrics.index');
        $parametros = Parametric::all();
        return view('layouts.admin.parametric.index',compact('parametros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $this->authorize('parametrics.create');
        return view('layouts.admin.parametric.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->authorize('parametrics.create');
        $datafill = $request->validate([
            'value' => 'required|max:4',
            'description' => 'required|min:2',
            'group' => 'required|max:255',
            'conector' => 'max:100',
            'slug' => 'max:150',
        ]);
        $parametro = Parametric::create($datafill);
        toastr()->success('Parametro creado correctamente');
        return redirect()->intended('/parametric');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parametric  $parametric
     * @return \Illuminate\Http\Response
     */
    public function show(Parametric $parametric)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parametric  $parametric
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $this->authorize('parametrics.edit');
        $parametro = Parametric::find(decode($id));
        if (is_null($parametro)){
            toastr()->error('Elemento no encotrado');
            return back();
        }
        return view('layouts.admin.parametric.edit',compact('parametro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parametric  $parametric
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $this->authorize('parametrics.edit');
        $datafill = $request->validate([
            'value' => 'required|max:4',
            'description' => 'required|min:2',
            'group' => 'required|max:255',
            'conector' => 'max:100',
            'slug' => 'max:150',
        ]);
        $parametro = Parametric::find(decode($id));
        if (is_null($parametro)){
            toastr()->error('Elemento no encotrado');
            return back();
        }
        $parametro->update($datafill);
        toastr()->success('Parametro actualizado correctamente');
        return redirect()->intended('/parametric');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parametric  $parametric
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('permission.destroy');
        $parametro = Parametric::find(decode($id));
        if($parametro){
            $parametro->delete();
            toastr()->warning('Elemento eliminado');
            return back();
        }
        toastr()->error('Parametro no encontrado');
        return back();
    }
}
