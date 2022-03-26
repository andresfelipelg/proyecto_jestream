@extends('layouts.plantilla')


@section('content')


<div class="conainer">

<div class="col-4 pt-5 m-auto">
    <div class="text-center mt-5 mb-5 ">
    <form  action="{{route('marcas.update',$id) }}" method="POST" class="mb-5">
        @csrf
        @method('PUT')
        <i class=" display-2 text-white bi bi-file-text-fill "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Editar Marca</h1>

        <div class="mb-3 mt-3 text-start">
        <input class="form-control" name="marca" value="{{$id->marca}}" type="text" placeholder="Ingrese la nueva marca">
      </div>



      <div class="mb-2 d-flex">
        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i> Guardar</button>
        <a href="{{ route('marcas.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="  bi bi-arrow-left-circle"></i> Atras</a>

      </div>



    </form>
    </div>
    </div>
</div>

@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
@stop

