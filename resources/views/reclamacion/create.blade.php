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
        <i class=" display-1 bi bi-clipboard-data-fill"></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nueva Reclamacion</h1>


        <div class="">
            <input class="form-control" name="fecha_ingreso" type="date" placeholder="Ingresa la fecha actual">
        </div>

        <div class="form-floating col-md-6">
            <input type="date" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de ingreso</label>
          </div>
           <div class="col-md-6">
                <select name="cliente" class="form-select">
                    <option selected>Cliente</option>
                    @foreach ($clientes as$cliente)
                    <option class="form-control" value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                    @endforeach
                </select>
            </div>
           <div class="col-md-6">
            <input class="form-control" name="codigo" type="number" placeholder="Ingrese el numero de factura">
           </div>
        <div class="col-md-6 ">
            <select name="producto" class="form-select">
                @foreach ($productos as $items)
                <option selected>Producto</option>
                <option value="{{$items->codigo}}">{{$items->codigo}}</option>
                @endforeach
            </select>
       </div>
       <div class="col-md-6">
        <input class="form-control" name="fecha_ingreso" type="number" placeholder="Cantidad">
    </div>
        <div class="col-md-6">
            <input class="form-control" name="fecha_ingreso" type="text" placeholder="Lote o Serial">
        </div>

       <div class="col-md-6">
        <select name="marca" class="form-select">
            <option selected>Marca</option>
            @foreach ($marcas as $marca)
            <option value=">{{$marca->marca}}">{{$marca->marca}}</option>
            @endforeach
        </select>
     </div>

     <div class="col-md-6">
        <input class="form-control" name="text" type="" placeholder="Descripcion del problema">
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Descripcion d eLaumayer" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Descripcion despues de Revision</label>
      </div>

      <div class="col-md-6">
        <select name="marca" class="form-select">
            <option selected>Solucion</option>
            <option value="0">No Aplica Garantia</option>
            <option value="1">Aplica Garantia</option>

        </select>
    </div>

    <div class="col-md-6">
        <select name="marca" class="form-select">
            <option selected>Tipo de Garantia</option>
            <option value="t">Tecnica</option>
            <option value="i">Interna</option>
            <option value="c">Comercial</option>
        </select>
    </div>

    <div class="col-md-6">
        <input class="form-control" name="fecha_ingreso" type="date" placeholder="Ingresa la fecha de Salida">
    </div>

    <div class="col-md-6">
        <input class="form-control" name="fecha_ingreso" type="text" placeholder="Tipo de Documento">
    </div>

    <div class="col-md-6">
        <input class="form-control" name="fecha_ingreso" type="text" placeholder="Consecutivo">
    </div>

    <div class="col-md-6">
        <select name="marca" class="form-select">
            <option selected>Estado</option>
            <option value="t">Iniciada</option>
            <option value="i">En proceso</option>
            <option value="c">Finalizada</option>
        </select>
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Descripcion d eLaumayer" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observaciones</label>
      </div>

      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Fecha de ingreso</label>
      </div>

      <div class="mb-2 d-flex">
        <input class="mt-2 btn btn-dark px-4 py-2" type="submit" value="Enviar" >
        <a href="" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2">Atras</a>
      </div>




    </form>
    </div>
    </div>

@endsection