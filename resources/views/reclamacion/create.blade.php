@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')
<body class="color">

<div class="col-6 pt-5 m-auto ">
    <div class="text-center mt-5 mb-5 ">
    <form  action="{{ route('reclamacion.store')}}" method="POST" class="mb-5 row g-3">
        @csrf
        <i class=" text-white display-3 bi bi-clipboard-data-fill"></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nueva Reclamacion</h1>


        <div class="form-floating col-md-6">
            <input type="date" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de ingreso</label>
            @if ($errors->has('fecha_ingreso'))
            <p class="text-white">{{ $errors->first('fecha_ingreso') }}</p>
            @endif
          </div>

          <div class="form-floating col-md-6">
            <input type="date" name="fecha_respuesta" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Fecha de Respuesta</label>
          </div>
           <div class="col-md-6 form-floating">
                <select name="cliente"  class="form-select">
                    @foreach ($clientes as $cliente)
                    <option class="form-control"  value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                    @endforeach
                </select>
                <label> Cliente</label>
                @if ($errors->has('cliente'))
                 <p class="text-white">{{ $errors->first('cliente') }}</p>
                @endif
            </div>

                <div class="col-md-6 form-floating" >
                    <select name="comercial" class="form-select">
                        @foreach ($comerciales as $comercial)
                        <option class="form-control" value="{{$comercial->nombre}}">{{$comercial->nombre}}</option>
                        @endforeach
                    </select>
                    <label>Comercial</label>
                    @if ($errors->has('comercial'))
                    <p class="text-white">{{ $errors->first('comercial') }}</p>
                    @endif
                </div>

                <div class="col-md-6 form-floating" >
                    <input class="form-control" name="ciudad" value="{{ old('ciudad') }}" type="text" placeholder="ciudad">
                    <label>Ciudad del cliente</label>
                    @if ($errors->has('ciudad'))
                     <p class="text-white">{{ $errors->first('ciudad') }}</p>
                   @endif
                </div>


           <div class="col-md-6 form-floating" >
            <input class="form-control" name="factura" value="{{ old('factura') }}" type="number" placeholder="Ingrese el numero de factura">
            <label>Ingrese el numero de factura</label>
            @if ($errors->has('factura'))
                <p class="text-white">{{ $errors->first('factura') }}</p>
            @endif
          </div>

        <div class="col-md-6 form-floating">
            <select name="producto" class="form-select">
                @foreach ($productos as $producto)
                    <option value="{{$producto->codigo}}">{{$producto->codigo}}</option>
                @endforeach
            </select>
            <label>Producto</label>
            @if ($errors->has('producto'))
                <p class="text-white">{{ $errors->first('producto') }}</p>
            @endif
       </div>

       <div class="col-md-6 form-floating">
        <select name="referencia" class="form-select">
            @foreach ($productos as $producto)
            <option value="{{$producto->referencia}}">{{$producto->referencia}}</option>
            @endforeach
        </select>
        <label>Referencia</label>
        @if ($errors->has('referencia'))
            <p class="text-white">{{ $errors->first('referencia') }}</p>
        @endif
   </div>

       <div class="col-md-6 form-floating">
        <input class="form-control" name="cantidad" value="{{ old('cantidad') }}" type="number" placeholder="Cantidad">
        <label>Cantidad</label>
        @if ($errors->has('cantidad'))
            <p class="text-white">{{ $errors->first('cantidad') }}</p>
        @endif
    </div>

        <div class="col-md-6 form-floating">
            <input class="form-control" name="lote_serial" value="{{ old('lote_serial') }}" type="text" placeholder="Lote o Serial">
            <label>Lote o Serial</label>
            @if ($errors->has('lote_serial'))
             <p class="text-white">{{ $errors->first('lote_serial') }}</p>
            @endif
        </div>

       <div class="col-md-6 form-floating">
        <select name="marca" class="form-select">
            @foreach ($marcas as $marca)
            <option value="{{$marca->marca}}">{{$marca->marca}}</option>
            @endforeach
        </select>
        <label>Marca</label>
        @if ($errors->has('marca'))
          <p class="text-white">{{ $errors->first('marca') }}</p>
       @endif
    </div>

     <div class="col-md-6 form-floating">
        <select name="estado" class="form-select">
            <option value="Iniciado">Iniciado</option>
            <option value="En proceso">En proceso</option>
            <option value="Finalizado">Finalizado</option>
        </select>
        <label>Estado</label>
        @if ($errors->has('estado'))
         <p class="text-white">{{ $errors->first('estado') }}</p>
       @endif
    </div>
     <div class="form-floating">
        <textarea class="form-control" name="descripcion_problema" placeholder="Descripcion de Laumayer" id="floatingTextarea2" style="height: 100px">{{ old('descripcion_problema') }}</textarea>
        <label for="floatingTextarea2">Descripcion del problema</label>
        @if ($errors->has('descripcion_problema'))
        <p class="text-white">{{ $errors->first('descripcion_problema') }}</p>
       @endif
      </div>

    <div class="form-floating">
        <textarea class="form-control" name="descripcion_revision" placeholder="Descripcion_revision" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Respuesta de revision</label>
      </div>

      <div class="form-floating">
        <textarea class="form-control" name="comentario_interno" placeholder="Descripcion_revision" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comentario_interno</label>
      </div>

      <div class="col-md-6 form-floating">
        <select name="solucion" class="form-select">
            <option value="En Revision">En Revision</option>
            <option value="no aplica la garantia">no aplica la garantia</option>
            <option value="aplica la garantia">aplica la garantia</option>
        </select>
        <label>Solucion</label>
    </div>

    <div class="col-md-6 form-floating">
        <select name="tipo_garantia" class="form-select">
            <option value="No Definida">No Definida</option>
            <option value="Tecnica">Tecnica</option>
            <option value="Interna">Interna</option>
            <option value="Comercial">Comercial</option>
        </select>
        <label>Tipo de Garantia</label>
    </div>



    <div class="col-md-6 form-floating">
        <input class="form-control" name="num_documento" type="text" placeholder="Tipo de Documento">
        <label>Tipo de Documento</label>
    </div>

    <div class="col-md-6 form-floating">
        <input class="form-control" name="consecutivo_carta" type="text" placeholder="Consecutivo carta">
        <label>Consecutivo carta</label>
    </div>

    <div class="form-floating">
        <textarea class="form-control" name="observaciones" placeholder="Descripcion d eLaumayer" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observaciones</label>
      </div>

      <div class="mb-2 d-flex">

        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i>  Enviar</button>
        <a href="{{ route('reclamacion.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="  bi bi-arrow-left-circle"></i> Atras</a>
      </div>
    </form>
    </div>
    </div>

</body>
@endsection
