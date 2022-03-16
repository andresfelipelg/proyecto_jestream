@extends('layouts.plantilla')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">phone_paused</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Directorio <b>LauNET</b></h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                  <th class="disabled-sorting text-right">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>ID</th>
                                    <th>NOMBRE</th>

                                    <th class="text-right">ACCIONES</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($marcas as $marca )

                                <tr>

                                    <td>{{$marca->id }}</td>
                                    <td>{{$marca->marca }}</td>


                                    <td class="text-right">
                                        <a href=""><i title="Detalle directorio" class="material-icons">dvr</i></a>
                                        <!--VALIDAMOS PERMISOS DEL USUSARIO-->



                                        <a href=""><i title="Agregar directorio" class="material-icons">group_add</i></a>
                                        <a href="{{ route('marcas.edit',$marca->id)}}"><i title="Detalle directorio" class="material-icons">edit</i></a>

                                        <!--FIN VALIDACIÓN-->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
</div>

@endsection
