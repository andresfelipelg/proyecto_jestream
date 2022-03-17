@extends('adminlte::page')

@section('content')

<a href="{{ route('marcas.create') }}" class="btn btn-primary mt-2 mb-3">Crear</a>

   <table class="table table-dark text-center table-striped mt-4 table-bordered shadow-lg" id="articulos">
     <thead class="bg-primary  text-white">
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
                <a href="{{ route('marcas.edit',$marca->id)}}" class="btn btn-info m-0 ">Editar</a>
                <button href=""class="btn btn-danger" type="submit" >Borrar</button>
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
@stop
