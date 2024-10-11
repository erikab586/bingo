@extends('back.layouts.layout')

    @section('content')
    <section class="content">
        <div class="block-header">
            <h2>SALAS</h2>
        </div>
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SALAS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">RETIROS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">GANANCIAS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTA DE  SALAS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a class="btn btn-success" href="{{ route('crearsala') }}">Crear Sala</a>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Imagen</th>
                                            <th>Precio</th>
                                            <th>Estatus</th>
                                            <th>Tipo de Sala</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Imagen</th>
                                            <th>Precio</th>
                                            <th>Estatus</th>
                                            <th>Tipo de Sala</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($sal as $sala)
                                        <tr>
                                            <td>{{ $sala->id }}</td>
                                            <td>{{ $sala->titulo}}</td>
                                            <td> <img src="{{ asset($sala->img_sala) }}" alt="Imagen de la Sala"></td>
                                            <td>{{ $sala->costo }}</td>
                                            <td>{{ $sala->estatus }}</td>
                                            <td>{{ $sala->id_tipo }}</td>
                                            <td>
                                            <a href="{{ route('editarsala', $sala->id) }}" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">create</i>
                                            </a>
                                            <form action="{{ route('borrarsala', $sala->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">delete_forever</i>
                                                </button>
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
            <!-- #END# Exportable Table -->
        </div>
    </section>
    @endsection