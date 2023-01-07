@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Registro de proveedores</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                    <li class="breadcrumb-item active">Registro de proveedor</li>
                  </ol>
                </div>
              </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body table-responsive p-4">
                                {!! Form::open(['route'=>'providers.store', 'method'=>'POST']) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese nombre de proveedor" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese email de proveedor" required>
                                </div>

                                <div class="form-group">
                                    <label for="ruc_number" class="form-label">Numero de RUC</label>
                                    <input type="number" name="ruc_number" id="ruc_number" class="form-control" placeholder="Ingrese RUC de proveedor" required>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Ingrese dirección de proveedor" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="form-label">Número de contacto</label>
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Ingrese número de contacto de proveedor" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-2">Registrar</button>
                                    <a href="{{route('providers.index')}}" class="btn btn-light mx-2 mt-2">Cancelar</a>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
