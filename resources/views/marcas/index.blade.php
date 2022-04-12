@extends('adminlte::page')

@section('content_header')
    <h1 class="h1 font-weight-bold ">Marcas</h1>
@stop

@section('content')

@can('marca_create')
<a href="{{ route('marcas.create') }}" class="btn btn-outline-success button mt-2 mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Crear</a>
@endcan
   <table class="table table-light text-center table-striped mt-4 table-bordered shadow-lg" id="articulos">
     <thead class="color  text-white">
         <tr>
             <th scope="col">ID</th>
             <th scope="col">Nombre</th>
             <th scope="col">Accion</th>

         </tr>
     </thead>
     <tbody>
        @foreach ($marcas as $marca )

         <tr>
            <td>{{$marca->id }}</td>
            <td>{{$marca->marca }}</td>

         <td>
                 <form  class ="" action="{{ route('marcas.delete',$marca->id) }}" method="post">
                 @csrf
                 @method('DELETE')
                 @can('marca_edit')
                <a href="{{ route('marcas.edit',$marca->id)}}" class="btn btn-outline-success button d m-0 "><i class="bi bi-pencil-square"></i> Editar</a>
                @endcan
                @can('marca_destroy')
                <button class="btn btn-outline-danger" type="submit" ><i class="bi bi-trash-fill"></i> Borrar</button>
                @endcan
            </form>
            </td>
         </tr>

         @endforeach
     </tbody>
   </table>

   <a href="{{ route('comerciales.descargar') }}" class="btn btn-outline-success button d m-0 ">Descargar</a>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('../../css/style.css')}}">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#articulos').DataTable({

         "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
     });
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
