@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Edición de cliente</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                    <li class="breadcrumb-item active">Editar cliente</li>
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
                                {!! Form::model($client, ['route'=>['clients.update',$client], 'method'=>'PUT']) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{$client->name}}" placeholder="Ingrese nombre del cliente" required>
                                </div>

                                <div class="form-group">
                                    <label for="dni" class="form-label">DNI</label>
                                    <input type="number" name="dni" id="dni" class="form-control" value="{{$client->dni}}" placeholder="Ingrese DNI de cliente" required>
                                </div>

                                <div class="form-group">
                                    <label for="ruc" class="form-label">RUC</label>
                                    <input type="number" name="ruc" id="ruc" class="form-control" value="{{$client->ruc}}" placeholder="Ingrese RUC de cliente">
                                    <small id="helpId" class="form-text text-muted">Este campo es opcional</small>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{$client->address}}" placeholder="Ingrese dirección del cliente">
                                    <small id="helpId" class="form-text text-muted">Este campo es opcional</small>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="form-label">Teléfono/celular</label>
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{$client->phone}}" placeholder="Ingrese telefono de cliente" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{$client->email}}" placeholder="Ingrese email de cliente" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-3">Actualizar</button>
                                    <a href="{{route('clients.index')}}" class="btn btn-light mx-2 mt-3">Cancelar</a>
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
