@extends('layouts.plantilla')


@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">

@endsection

@section('content')


    <div class="col-4 pt-5 m-auto ">
        <div class="text-center mt-5 mb-5 ">
    <form  action="{{route('users.store') }}" method="POST" class="mb-5">
        @csrf
        <i class=" display-2 text-white bi bi-person-circle "></i>
        <h1 class= "mt-4 h2 font-weight-normal text-white" >Nuevo Usuario</h1>

        <div class="mb-3 mt-3 text-start">
            <input class="form-control" name="name" type="text" placeholder="Ingrese el nombre">
       </div>

       <div class="mb-3 mt-3 text-start">
           <input class="form-control" name="email" type="email" placeholder="Ingrese el email">
     </div>
     <div class="mb-3 mt-3 text-start">
        <input class="form-control" name="password" type="password" placeholder="Ingrese la contraseña">
    </div>
    <div class="mb-3 mt-3 text-start">
        <input class="form-control" name="passwordconfirmation_ " type="password" placeholder="Confirma la contraseña">
    </div>
    <div class="row">
        <label for="name" class="col-sm-2 col-form-label text-white">Permisos</label>
        <div class="col-sm-12">
          <div class="form-group">
            <div class="tab-content">
              <div class="tab-pane active">
                <table class="table">
                  <tbody>
                    @foreach ($roles as $id => $role)
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class=" form-check-input" type="checkbox" name="roles[]"
                              value="{{ $id }}">
                            <span class=" form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td class="text-white">
                        {{ $role }}
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="mb-2 d-flex">
        <button class="mt-2 btn btn-dark px-4 py-2" type="submit"><i class="bi bi-send-plus-fill"></i> Guardar</button>
        <a href="{{ route('users.index')}}" class="mt-2 btn btn-secondary text-white btn-outline-dark ms-2 px-4 py-2"><i class="  bi bi-arrow-left-circle"></i> Atras</a>

    </div>
    </form>
    </div>
    </div>

@endsection
