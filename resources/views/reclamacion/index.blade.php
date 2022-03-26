@extends('adminlte::page')

@section('content')

<a href="{{ route('reclamacion.create') }}" class="btn btn-outline-primary mt-2 mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Crear</a>

   <table class="table table-light text-center table-striped mt-4 table-bordered shadow-lg" id="articulos">
     <thead class="bg-primary  text-white">
         <tr>
             <th scope="col">Consecutivo</th>
             <th scope="col">Cliente</th>
             <th scope="col">Factura</th>
             <th scope="col">Codigo</th>
             <th scope="col">Problemas del equipo</th>
             <th scope="col">Estado</th>
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


         <td>
                 <form  class ="" action="{{ route('reclamacion.delete',$reclamacion->id) }}" method="post">
                 @csrf
                 @method('DELETE')
                <a href="{{ route('reclamacion.edit',$reclamacion->id)}}" class="btn btn-outline-primary d m-0 "><i class="bi bi-pencil-square"></i> Editar</a>
                <button class="btn btn-outline-danger" type="submit" ><i class="bi bi-trash-fill"></i> Borrar</button>

            </form>
            </td>
         </tr>

         @endforeach
     </tbody>
   </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
