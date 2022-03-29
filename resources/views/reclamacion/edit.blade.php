@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')
<body class="color">

<div class="col-6 pt-5 m-auto ">
    <div class="text-center mt-5 mb-5 ">
    <form  action="{{ route('reclamacion.update',$reclamo->id)}}" method="POST" class="mb-5 row g-3">
        @csrf
        @method('PUT')
        <i class=" text-white display-3 bi bi-clipboard-data-fill"></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nueva Reclamacion</h1>


        <div class="form-floating col-md-6">
            <input type="date" name="fecha_ingreso" class="form-control" value="{{$reclamo->fecha_ingreso}}" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de ingreso</label>
          </div>
          <div class="form-floating col-md-6">
            <input type="date" name="fecha_respuesta" value="{{ $reclamo->fecha_respuesta }}" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de Respuesta</label>
          </div>
           <div class="col-md-6">
                <select name="cliente" value="{{  $reclamo->cliente }}" class="form-select">
                    <option selected>Cliente</option>
                    @foreach ($clientes as$cliente)
                    <option class="form-control" value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-6">
                    <select name="comercial"  value="{{  $reclamo->comercial }}" class="form-select">
                        <option selected>Comercial</option>
                        @foreach ($comerciales as $comercial)
                        <option class="form-control" value="{{$comercial->nombre}}">{{$comercial->nombre}}</option>
                        @endforeach
                    </select>
            </div>


           <div class="col-md-6">
            <input class="form-control" name="factura"  value="{{  $reclamo->factura }}" type="number" placeholder="Ingrese el numero de factura">
           </div>
        <div class="col-md-6 ">
            <select name="producto"  value="{{  $reclamo->producto }}"class="form-select">
                <option selected>Producto</option>
                @foreach ($productos as $producto)
                <option value="{{$producto->codigo}}">{{$producto->codigo}}</option>
                @endforeach
            </select>
       </div>
       <div class="col-md-6">
        <input class="form-control" name="cantidad"  value="{{  $reclamo->cantidad }}"type="number" placeholder="Cantidad">
    </div>
        <div class="col-md-6">
            <input class="form-control" name="lote_serial"  value="{{  $reclamo->lote_serial }}"type="text" placeholder="Lote o Serial">
        </div>

       <div class="col-md-6">
        <select name="marca"  value="{{  $reclamo->marca }}" class="form-select">
            <option selected>Marca</option>
            @foreach ($marcas as $marca)
            <option value=">{{$marca->marca}}">{{$marca->marca}}</option>
            @endforeach
        </select>
     </div>

     <div class="col-md-6 form-floating">
        <select name="estado"  class="form-select">
            <option value="{{  $reclamo->estado === "iniciado" ? 'selected':''}}">Iniciado</option>
            <option value="{{  $reclamo->estado  === "En proceso" ? 'selected':'' }}">En proceso</option>
            <option value="{{  $reclamo->estado === "Finalizado" ? 'selected':'' }}">Finalizado</option>
        </select>
        <label for="floatingSelect">Estado</label>
    </div>
     <div class="form-floating">
        <textarea class="form-control" name="descripcion_problema"  placeholder="Descripcion de Laumayer" id="floatingTextarea2" style="height: 100px">{{  $reclamo->descripcion_problema }} </textarea>
        <label for="floatingTextarea2">Descripcion del problema</label>

      </div>

    <div class="form-floating">
        <textarea class="form-control" name="descripcion_revision"  placeholder="Descripcion_revision" id="floatingTextarea2" style="height: 100px">{{  $reclamo->descripcion_revision }}</textarea>
        <label for="floatingTextarea2">Respuesta de revision</label>
      </div>

      <div class="col-md-6">
        <select name="solucion"  value="{{  $reclamo->solucion }}" class="form-select">
            <option value="">---Solucion---</option>
            <option value="{{  $reclamo->solucion }}">{{  $reclamo->solucion }}</option>
            <option value="no_aplica">No Aplica Garantia</option>
            <option value="aplica">Aplica Garantia</option>

        </select>
    </div>

    <div class="col-md-6">
        <select name="tipo_garantia"  value="{{  $reclamo->tipo_garantia }}"class="form-select">
            <option selected>Tipo de Garantia</option>
            <option value="tecnica">Tecnica</option>
            <option value="interna">Interna</option>
            <option value="comercial">Comercial</option>
        </select>
    </div>



    <div class="col-md-6">
        <input class="form-control" name="num_documento"  value="{{ $reclamo->num_documento }}" type="text" placeholder="Tipo de Documento">
    </div>

    <div class="col-md-6">
        <input class="form-control" name="consecutivo_carta"  value="{{  $reclamo->consecutivo_carta }}" type="text" placeholder="Consecutivo carta">
    </div>

    <div class="form-floating">
        <textarea class="form-control" name="observaciones"  placeholder="Observaciones" id="floatingTextarea2" style="height: 100px">{{  $reclamo->observaciones }}</textarea>
      </div>

      <div class="mb-2 d-flex">

        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i>  Enviar</button>
        <a href="{{ route('reclamacion.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="bi bi-arrow-left-circle"></i> Atras</a>
      </div>
    </form>
    </div>
    </div>

</body>
@endsection
