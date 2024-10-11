@extends('back.layouts.layout')

    @section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SALAS  
                </h2>
            </div>
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CREAR SALA</h2>
                        </div>
                        <div class="body">
                            
                            <form action="{{ route('nuevasala') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="titulo" maxlength="100" minlength="3" required>
                                            <label class="form-label">TÍTULO</label>
                                        </div>
                                        <div class="help-info">Max. 100 caracteres</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="imagensala">
                                        </div>
                                        <div class="help-info">Imagen jpeg, jpg y png</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="costo" required>
                                            <label class="form-label">PRECIO</label>
                                        </div>
                                        <div class="help-info">Ejemplo: 12.2</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <select  name="tipo">
                                        <option value="" disabled selected>Selecciona la sala</option>
                                        @foreach ($tipo as $sala)
                                        <option value="{{$sala->id}}">{{$sala->descripcion_tipo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <select  name="estatus">
                                        <option value="" disabled selected>Selecciona el estatus</option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
       </div>
    </section>
    @endsection