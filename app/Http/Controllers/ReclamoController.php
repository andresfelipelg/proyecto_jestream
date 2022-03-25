<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Comercial;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Reclamo;
use Illuminate\Http\Request;

class ReclamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clientes = Cliente::all();
        $productos = Producto::all();
        $marcas = Marca::all();
        $comerciales = Comercial::all();

        return view ('/reclamacion/create',compact('clientes','productos','marcas','comerciales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamos = new Reclamo();
        $reclamos->fecha_ingreso = $request->fecha_ingreso;
        $reclamos->fecha_respuesta = $request->fecha_respuesta;
        $reclamos->cliente = $request->cliente;
        $reclamos->comercial = $request->comercial;
        $reclamos->factura = $request->factura;
        $reclamos->producto = $request->producto;
        $reclamos->cantidad = $request->cantidad;
        $reclamos->lote_serial = $request->lote_serial;
        $reclamos->marca = $request->marca;
        $reclamos->estado = $request->estado;
        $reclamos->descipcion_problema = $request->descripcion_problema;
        $reclamos->descipcion_revision = $request->descripcion_revision;
        $reclamos->solucion = $request->solucion;
        $reclamos->tipo_garantia = $request->tipo_garantia;
        $reclamos->num_documento = $request->num_documento;
        $reclamos->consecutivo_carta = $request->consecutivo_carta;
        $reclamos->observaciones = $request->observaciones;
        $reclamos->save();

        return redirect(route('reclamacion.index'));


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
        return view('reclamacion.edit',compact('id'));
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

        $reclamo = Reclamo::find($id);
        $reclamo->fecha_ingreso = $request->fecha_ingreso;
        $reclamo->fecha_respuesta = $request->fecha_respuesta;
        $reclamo->cliente = $request->cliente;
        $reclamo->comercial = $request->comercial;
        $reclamo->factura = $request->factura;
        $reclamo->producto = $request->producto;
        $reclamo->cantidad = $request->cantidad;
        $reclamo->lote_serial = $request->lote_serial;
        $reclamo->marca = $request->marca;
        $reclamo->estado = $request->estado;
        $reclamo->descipcion_problema = $request->descripcion_problema;
        $reclamo->descipcion_revision = $request->descripcion_revision;
        $reclamo->solucion = $request->solucion;
        $reclamo->tipo_garantia = $request->tipo_garantia;
        $reclamo->num_documento = $request->num_documento;
        $reclamo->consecutivo_carta = $request->consecutivo_carta;
        $reclamo->observaciones = $request->observaciones;
        $reclamo->save();
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
