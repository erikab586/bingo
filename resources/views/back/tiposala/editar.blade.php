@extends('back.layouts.layoutwo')

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
                            <h2>EDITAR TIPO DE SALA</h2>
                        </div>
                        <div class="body">
                            
                            <form action="{{ route('updatetipo') }}" method="POST" >
                                @csrf
                                <input type="hidden" name="id" value="{{ $tipo->id }}">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="descripcion" value="{{$tipo->descripcion_tipo}}" maxlength="100" minlength="3" required>
                                            <label class="form-label">DESCRIPCION TIPO DE SALA</label>
                                        </div>
                                        <div class="help-info">Max. 10 caracteres</div>
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