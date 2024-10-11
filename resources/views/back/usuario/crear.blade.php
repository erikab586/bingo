@extends('back.layouts.layout')
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
                            <h2>CREAR USUARIO</h2>
                        </div>
                        <div class="body">
                            
                            <form action="{{ route('nuevouser') }}" method="POST" >
                                @csrf
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombre" maxlength="100" minlength="3" required>
                                            <label class="form-label">NOMBRE</label>
                                        </div>
                                        <div class="help-info">Max. 100 caracteres</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellido" minlength="3" maxlength="100" required>
                                            <label class="form-label">APELLIDO</label>
                                        </div>
                                        <div class="help-info">Max. 100 carateres</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="nacimiento" required>
                                            <label class="form-label"></label>
                                        </div>
                                        <div class="help-info">Fecha de Nacimiento: DD-MM-AAAA</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="telefono" required>
                                            <label class="form-label">Télefono</label>
                                        </div>
                                        <div class="help-info">Ejemplo: +584121090185</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="direccion" required>
                                            <label class="form-label">Dirección</label>
                                        </div>
                                        <div class="help-info"># Casa, #Calle, Urb, Ciudad, País</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email"  required>
                                            <label class="form-label">Email</label>
                                        </div>
                                        <div class="help-info">ejemplo@dominio.com</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password"  required>
                                            <label class="form-label">Password</label>
                                        </div>
                                        <div class="help-info">May, Min, numero, caracter especial.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="facebook">
                                            <label class="form-label">Facebook</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="google">
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