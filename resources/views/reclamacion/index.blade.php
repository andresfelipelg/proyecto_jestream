@extends('adminlte::page')


@section('content_header')

<div class="alert {{$clase}} alert-dismissible fade show" role="alert">
    <span class="text-white"><strong class="text-white">Atencion!</strong> {{$mensaje}}</span>
     <button type="button" class="btn text-white" data-bs-dismiss="alert" aria-label="Close"><i class=" text-white bi bi-x-lg"></i></button>
   </div>

    <h1 class="h1 font-weight-bold ">Reclamaciones</h1>

@stop

@section('content')


@can('reclamacion_create')
<a href="{{ route('reclamacion.create') }}" class="btn btn-outline-success  button mt-2 mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Crear</a>
@endcan
@can('reclamacion_show')
<a href="{{ route('reclamacion.descargar') }}" class="btn btn-outline-success  button mt-2 mb-3"><i class="bi bi-file-earmark-excel-fill"></i>Exportar</a>
@endcan
   <table class="table table-light text-center table-striped mt-4 table-bordered shadow-lg" id="reclamacion" id="reclamo">
     <thead class="color  text-white">
         <tr>
             <th scope="col">Consecutivo</th>
             <th scope="col">Cliente</th>
             <th scope="col">Factura</th>
             <th scope="col">Codigo</th>
             <th scope="col">Problemas del equipo</th>
             <th scope="col">Estado</th>
             <th scope="col">Vencimiento</th>
             <th scope="col">Acciones</th>
         </tr>
     </thead>
     <tbody>
        @foreach ($reclamaciones as $reclamacion )

         <tr>
            <td>{{$reclamacion->id }}</td>
            <td>{{$reclamacion->cliente }}</td>
            <td>{{$reclamacion->factura }}</td>
            <td>{{$reclamacion->producto }}</td>
            <td>{{$reclamacion->descripcion_problema }}</td>
            <td>{{$reclamacion->estado }}</td>
            @if ( $diff == 0 && $reclamacion->estado =='Finalizado' )
            <td class="text-dark">{{$diff}}</td>
            @elseif ($diff  < 2)
            <td class="text-danger">{{ $diff}}</td>
            @elseif ( $diff  < 5)
            <td class="text-warning">{{ $diff}}</td>
            @else
            <td>{{$diff}}</td>
            @endif

            {{-- <td>{{ $diff = $reclamacion->fecha_vencimiento->diffInDays($fecha)}}<td/> --}}

            {{-- <td class="text-danger">{{ $diff = $reclamacion->fecha_vencimiento->diffInDays($now) > 5 ? 'hola':'holi' }}</td> --}}
            {{-- <td class="text-danger">{{ $diff = $reclamacion->fecha_vencimiento->diffInDays($now) > 5 ? 'hola':'holi' }}  --}}




         <td>
                 <form  class ="" action="{{ route('reclamacion.delete',$reclamacion->id) }}" method="post">
                 @csrf
                 @method('DELETE')
                <a href="{{ route('reclamacion.show',$reclamacion->id)}}" class="btn btn-outline-success button d m-0 "><i class="bi bi-eye"></i> Ver</a>
                @can('reclamacion_edit')
                <a href="{{ route('reclamacion.edit',$reclamacion->id)}}" class="btn btn-outline-success button d m-0 "><i class="bi bi-pencil-square"></i> Editar</a>
                @endcan
                @can('reclamacion_edit')
                <a href="{{ route('reclamacion.pdf',$reclamacion->id)}}" class="btn btn-outline-success button d m-0 "><i class="bi bi-file-pdf-fill"></i>carta</a>

                @endcan
                @can('reclamacion_destroy')
                <button class="btn btn-outline-danger" type="submit" ><i class="bi bi-trash-fill"></i> Borrar</button>
                @endcan
            </form>
            </td>
         </tr>

         @endforeach
     </tbody>
   </table>

@stop

@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.css"/>
    <link rel="stylesheet" href="{{asset('../../css/style.css')}}">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/autoFill.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
     $('#reclamo').DataTable({

         "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
     });
      } );
</script>

<script>
    $('#reclamacion').DataTable( {
     responsive: true,
     autoWidth:false
});

</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('#permisos').DataTable( {
    responsive: true,
    autoWidth:false
} );
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

let forms = document.querySelectorAll('form');
forms.forEach(form =>{
form.addEventListener('submit',(event)=>{
 event.preventDefault();

    Swal.fire({
            title: '¿Quieres eliminar el registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'confirmar'
}).then((result) => {
  if (result.isConfirmed) {
      form.submit()
    Swal.fire(
      'Eliminado!',
      'Se elimino con exito.',
      'success'
    )
  }
})

});
})
</script>
@stop
