@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')


    <div class="col-4 pt-5 m-auto ">
        <div class="text-center mt-5 mb-5 ">
    <form  action="" method="POST" class="mb-5">
        @csrf
        @method('PUT')
        <i class=" display-2 text-white bi bi-person-circle "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Editar Rol</h1>

        <div class="mb-3 mt-3 text-start">
            <input class="form-control" name="name" value="{{ $role->name }}" type="text" placeholder="Ingrese el nombre del role">
       </div>

       <div class="row">
        <label for="name" class="col-sm-2 col-form-label text-white">Permisos</label>
        <div class="col-sm-12">
          <div class="form-group">
            <div class="tab-content">
              <div class="tab-pane active">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-white">
                        <div class="form-check">
                          <label class="form-check-label" class="text-white">ver</label>
                          <input class=" form-check-input" type="checkbox" name="permissions">
                          <br>
                          <label class="form-check-label" class="text-white">editar</label>
                          <input class=" form-check-input" type="checkbox" name="permissions">
                          <br>
                          <label class="form-check-label" class="text-white">crear</label>
                          <input class=" form-check-input" type="checkbox" name="permissions">
                          <br>
                          <label class="form-check-label" class="text-white">borrar</label>
                          <input class=" form-check-input" type="checkbox" name="permissions">
                          <br>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-2 d-flex">
        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i> Guardar</button>
        <a href="{{ route('roles.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="  bi bi-arrow-left-circle"></i> Atras</a>

    </div>
    </form>
    </div>
    </div>

@endsection
