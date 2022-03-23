@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')
<body class=" bg-info">

</body>
<div class="col-4 pt-5 m-auto ">
    <div class="text-center mt-5 mb-5 ">
    <form  action="" method="POST" class="mb-5 row g-3">
        @csrf
        <i class=" display-1 bi bi-file-text-fill "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nuevo Codigo</h1>

        <div class="col-md-6 ">
            <select name="producto" class="form-select">
                @foreach ($productos as $items)
                <option selected>Producto</option>
                <option value="{{$items->codigo}}">{{$items->codigo}}</option>
                @endforeach
            </select>
       </div>

       <div class="mb-3 mt-3 text-start col-md-6">
        <select name="marca" class="form-select">
            <option selected>Marca</option>
            @foreach ($marcas as $marca)
            <option value=">{{$marca->marca}}">{{$marca->marca}}</option>
            @endforeach
        </select>
     </div>
     <div class="mb-3 mt-3 text-start">
        <select name="cliente" class="form-select">
            <option selected>Cliente</option>
            @foreach ($clientes as$cliente)
            <option class="form-control" value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
            @endforeach
        </select>
    </div>


      <div class="mb-2 d-flex">
      <input class="mt-2 btn btn-dark px-4 py-2" type="submit" value="Enviar" >
      <a href="" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2">Atras</a>

      </div>



    </form>
    </div>
    </div>

@endsection
