@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')
<body class="color">

<div class="col-6 pt-5 m-auto ">
    <div class="text-center mt-5 mb-5 ">
    <form  action="" method="POST" class="mb-5 row g-3">
        @csrf
        @method('PUT')
        <i class=" text-white display-3 bi bi-clipboard-data-fill"></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Mostrar Reclamacion</h1>


        <div class="form-floating col-md-6">
            <input type="date" name="fecha_ingreso" class="form-control" value="{{$reclamo->fecha_ingreso}}" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de ingreso</label>
          </div>
          <div class="form-floating col-md-6">
            <input type="date" name="fecha_respuesta" value="{{ $reclamo->fecha_respuesta }}" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de Respuesta</label>
          </div>

           <div class="col-md-6 form-floating">
                <select name="cliente" id="floatingSelect" value="{{  $reclamo->cliente }}" class="form-select">
                    <option value="{{$reclamo->cliente}}">{{$reclamo->cliente}}</option>
                </select>
                <label for="floatingSelect">Cliente</label>
                </div>
                <div class="col-md-6 form-floating ">
                    <select name="comercial"  class="form-select" id="floatingSelect">
                        <option value="{{$reclamo->comercial}}">{{$reclamo->comercial}}</option>

                    </select>
                    <label for="floatingSelect">Comercial</label>
            </div>


           <div class="col-md-6 form-floating">
            <input class="form-control" name="factura"  value="{{  $reclamo->factura }}" type="number" placeholder="Ingrese el numero de factura">
            <label for="floatingSelect">Ingrese el numero de factura</label>
           </div>

        <div class="col-md-6 form-floating ">
            <select name="producto" id="floatingSelect"  class="form-select">
                <option value="{{$reclamo->producto}}">{{$reclamo->producto}}</option>
            </select>
            <label for="floatingSelect">Producto</label>
       </div>
       <div class="col-md-6 form-floating">
        <input class="form-control" name="cantidad"  value="{{  $reclamo->cantidad }}"type="number" placeholder="Cantidad">
        <label for="floatingSelect">Cantidad</label>
    </div>
        <div class="col-md-6 form-floating">
            <input class="form-control" name="lote_serial"  value="{{  $reclamo->lote_serial }}"type="text" placeholder="Lote o Serial">
            <label for="floatingSelect">Lote o Serial</label>
        </div>

       <div class="col-md-6 form-floating">
        <select name="marca"  value="{{  $reclamo->marca }}" id="floatingSelect"  aria-label="Floating label select example" class="form-select">
            <option value="{{$reclamo->marca}}">{{$reclamo->marca}}</option>

        </select>
        <label for="floatingSelect">Marca</label>
     </div>


    <div class="col-md-6 form-floating ">
        <select name="estado"  class="form-select">
            <option value="{{  $reclamo->estado  }}">{{$reclamo->estado}}</option>
        </select>
        <label for="floatingTextarea2">Estado</label>
    </div>


     <div class="form-floating">
        <textarea class="form-control" name="descripcion_problema"   placeholder="Descripcion de Laumayer" id="floatingTextarea2" style="height: 100px">{{  $reclamo->descripcion_problema }}</textarea>
        <label for="floatingTextarea2">Descripcion del problema</label>
      </div>

    <div class="form-floating">
        <textarea class="form-control" name="descripcion_revision"   placeholder="Descripcion_revision" id="floatingTextarea2" style="height: 100px">{{  $reclamo->descripcion_revision }}</textarea>
        <label for="floatingTextarea2">Respuesta de revision</label>
      </div>



    <div class="col-md-6 form-floating">
        <select name="solucion"  class="form-select">
            <option value="{{  $reclamo->solucion  }}">{{  $reclamo->solucion  }}</option>

        </select>
        <label for="floatingTextarea2">Solucion</label>
    </div>

    <div class="col-md-6 form-floating">
        <select name="tipo_garantia" class="form-select">
            <option value="{{  $reclamo->tipo_garantia  }}">{{  $reclamo->tipo_garantia   }}</option>
        </select>
        <label for="floatingTextarea2">Tipo de Garantia</label>
    </div>

    <div class="col-md-6 form-floating">
        <input class="form-control" name="num_documento"  value="{{ $reclamo->num_documento }}" type="text" placeholder="Tipo de Documento">
        <label for="floatingTextarea2">Tipo de Documento</label>
    </div>

    <div class="col-md-6 form-floating">
        <input class="form-control" name="consecutivo_carta"  value="{{  $reclamo->consecutivo_carta }}" type="text" placeholder="Consecutivo carta">
        <label for="floatingTextarea2">Consecutivo carta</label>
    </div>

    <div class="form-floating">
        <textarea class="form-control" name="observaciones"   placeholder="Descripcion d eLaumayer" id="floatingTextarea2" style="height: 100px">{{  $reclamo->observaciones }}</textarea>
        <label for="floatingTextarea2">Observaciones</label>
      </div>

      <div class="mb-2 d-flex">
        <a href="{{ route('reclamacion.edit',$reclamo->id)}}" class="mt-2 btn btn-dark px-4 py-2 "><i class="bi bi-pencil-square"></i> Editar</a>
        <a href="{{ route('reclamacion.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="bi bi-arrow-left-circle"></i> Atras</a>
      </div>
    </form>
    </div>
    </div>

</body>
@endsection
