@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')

<div class="col-4 pt-5 m-auto ">
    <div class="text-center mt-5 mb-5 ">
    <form  action="{{route('marcas.store') }}" method="POST" class="mb-5">
        @csrf
        <i class=" display-1 bi bi-file-text-fill "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nueva Marca</h1>

        <div class="mb-3 mt-3 text-start">
        <input class="form-control" name="marca" type="text" placeholder="Ingrese la nueva marca">
      </div>



      <div class="mb-2 d-flex">
      <input class="mt-2 btn btn-dark px-4 py-2" type="submit" value="Enviar" >
      <input class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2" type="button" value="Borrar">

      </div>



    </form>
    </div>
    </div>
@endsection
