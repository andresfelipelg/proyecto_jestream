@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')


    <div class="col-4 pt-5 m-auto ">
        <div class="text-center mt-5 mb-5 ">
    <form  action="{{route('productos.store') }}" method="POST" class="mb-5">
        @csrf
        <i class=" display-2 text-white bi bi-file-text-fill "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nuevo Codigo</h1>

        <div class="mb-3 mt-3 text-start">
            <input class="form-control" name="codigo" value="{{ old("codigo" ) }}" type="text" placeholder="Ingrese el codigo">
            @if ($errors->has('codigo'))
            <p class="text-white">{{ $errors->first('codigo') }}</p>
           @endif
       </div>

       <div class="mb-3 mt-3 text-start">
           <input class="form-control" name="referencia"  value="{{ old("referencia" ) }}" type="text" placeholder="Ingrese la referencia">
           @if ($errors->has('referencia'))
            <p class="text-white">{{ $errors->first('referencia') }}</p>
           @endif
     </div>
     <div class="mb-3 mt-3 text-start">
        <input class="form-control" name="referencia_proveedor"  value="{{ old("referencia_proveedor" ) }}" type="text" placeholder="Ingrese la referencia del proveedor">
        @if ($errors->has('referencia_proveedor'))
            <p class="text-white">{{ $errors->first('referencia_proveedor') }}</p>
        @endif
    </div>


    <div class="mb-2 d-flex">
        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i> Guardar</button>
        <a href="{{ route('productos.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="  bi bi-arrow-left-circle"></i> Atras</a>

    </div>
    </form>
    </div>
    </div>

@endsection
