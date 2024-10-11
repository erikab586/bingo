@extends('back.layouts.layoutwo')

    @section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    USUARIOS
                </h2>
            </div>
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDITAR USUARIO</h2>
                        </div>
                        <div class="body">
                            
                            <form action="{{ route('updateuser') }}" method="POST" >
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombre" value="{{$user->nombre}}" maxlength="100" minlength="3" required>
                                            <label class="form-label">NOMBRE</label>
                                        </div>
                                        <div class="help-info">Max. 100 caracteres</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellido" value="{{$user->apellido}}" minlength="3" maxlength="100" required>
                                            <label class="form-label">APELLIDO</label>
                                        </div>
                                        <div class="help-info">Max. 100 carateres</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="nacimiento" value="{{$user->nacimiento}}" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info">Fecha de Nacimiento: AAAA-MM-DD</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="telefono" value="{{$user->telefono}}"required>
                                            <label class="form-label">Télefono</label>
                                        </div>
                                        <div class="help-info">Ejemplo: +584121090185</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="direccion" value="{{$user->direccion}}" required>
                                            <label class="form-label">Dirección</label>
                                        </div>
                                        <div class="help-info"># Casa, #Calle, Urb, Ciudad, País</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email"  value="{{$user->email}}" required>
                                            <label class="form-label">Email</label>
                                        </div>
                                        <div class="help-info">ejemplo@dominio.com</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="rol" value="{{$user->rol}}" readonly="true">
                                            <label class="form-label">Rol</label>
                                        </div>
                                        <div class="help-info">May, Min, numero, caracter especial.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="facebook" value="{{$user->facebook_id}}">
                                            <label class="form-label">Facebook</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="google" value="{{$user->google_id}}">
                                            <label class="form-label">Google</label>
                                        </div>
                                    </div>
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