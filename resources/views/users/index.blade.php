@extends('adminlte::page')

@section('content_header')
    <h1 class="h1 font-weight-bold ">Usuarios</h1>
@stop

@section('content')
{{--
@can('user_create') --}}
<a href="{{ route('users.create') }}" class="btn btn-outline-success button mt-2 mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Crear</a>
{{-- @endcan --}}


   <table class="table table-light text-center table-striped mt-4 table-bordered shadow-lg" id="usuarios" id="usuario">
     <thead class="color text-white">
         <tr>
             <th scope="col">ID</th>
             <th scope="col">Nombre</th>
             <th scope="col">Email</th>
             <th scope="col">Roles</th>
             <th scope="col">Acciones</th>
         </tr>
     </thead>
     <tbody>
        @foreach ($users as $user )

         <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->email }}</td>
            <td>
                @forelse ($user->roles as $role)
                    <span class=" badge color text-white">
                        {{ $role->name }}
                    </span>
                @empty
                <span class="badge color text-white">no hay permisos</span>
                @endforelse
            </td>
         <td>
                 <form  class ="" action="{{ route('users.delete',$user->id) }}" method="post">
                 @csrf
                 @method('DELETE')
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-outline-success button d m-0 "><i class="bi bi-pencil-square"></i> Editar</a>
                <button class="btn btn-outline-danger" type="submit" ><i class="bi bi-trash-fill"></i> Borrar</button>

            </form>
            </td>
         </tr>

         @endforeach
     </tbody>
   </table>

@stop

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.css"/>
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
<script>
    $(document).ready(function() {
     $('#usuario').DataTable({

         "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
     });
      });
</script>

<script>
    $('#usuarios').DataTable( {
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
            title: '??Quieres eliminar el registro?',
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
