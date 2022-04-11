<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        abort_if(Gate::denies('producto_index'),403);
        $productos = Producto::all();

        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('producto_create'),403);
        return view ('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request )
    {
        $productos = new Producto();
        $productos->codigo = $request->codigo;
        $productos->referencia = $request->referencia;
        $productos->referencia_proveedor = $request->referencia_proveedor;
        $productos->save();

        return redirect(route('productos.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $id)
    {
        abort_if(Gate::denies('producto_edit'),403);

        return view ('productos.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $id)
    {
        //dd($request);
        $id->marca = $request->marca;
        $id->update();

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos \$marcas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('producto_destroy'),403);
        $marca = Producto::find($id);
        $marca->delete();

        return redirect(route('marcas.index'));
    }

}
