<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $empleados = empleados::get();
        return view('home')->with('empleados', $empleados);
   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new empleados;
        $empleados->nombre = $request->input('nombre');
        $empleados->apellidos = $request->input('apellidos');
        $empleados->emailempleado = $request->input('emailempleado');
        $empleados->telefono = $request->input('telefono');
        $empleados->salario = $request->input('salario');
        $empleados->departamento = $request->input('departamento');
        $empleados->save();

        return redirect()->route('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        return response()->json($empleados);
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleados)
    {
        //Formulario de Actualizacion
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleados $empleados)
    {
        $empleados = $empleados->update($request->all());
        return response()->json($empleados);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = empleados::find($id);
        $empleado->delete();
        return redirect()->route('/');


    }
}
