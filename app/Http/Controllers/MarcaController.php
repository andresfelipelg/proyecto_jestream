<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use Illuminate\Support\Facades\Gate;
use App\Models\Comercial;

use App\Exports\ComercialsExport;
use Maatwebsite\Excel\Facades\Excel;


class MarcaController extends Controller

{


    public function export() 
    {
        return Excel::download(new ComercialsExport, 'comerciales.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        abort_if(Gate::denies('marca_index'),403);
        $marcas = Marca::all();

        return view('marcas.index',compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('marca_create'),403);
        return view ('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request )
    {
        $marcas = new Marca();
        $marcas->marca = $request->marca;
        $marcas->save();

        return redirect(route('marcas.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */

    public function edit(Marca $id)
    {
        abort_if(Gate::denies('marca_edit'),403);
        return view ('marcas.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $id)
    {
        //dd($request);
        $id->marca = $request->marca;
        $id->update();

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('marca_destroy'),403);
        $marca = Marca::find($id);
        $marca->delete();

        return redirect(route('marcas.index'));
    }

}
