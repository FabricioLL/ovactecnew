@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Información del cliente</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                    <li class="breadcrumb-item active">{{$client->name}}</li>
                  </ol>
                </div>
              </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="border-bottom text-left pb-4 py-2 px-4">
                                    <a href="#" class="d-flex">
                                        <img src="{{asset('/img/client.png')}}" alt="image" class="avatar" width="45" height="45" />
                                        <h3 class="title mx-4 mt-2" style="color: black">{{$client->name}}</h3>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="list-group">
                                                    <button type="button" class="btn btn-secondary">Sobre cliente</button>
                                                    <button type="button" class="btn btn-secondary"> Historial de compras</button>
                                                </div>
                                                <hr>
                                                <div class="list-group">
                                                    @can('clients.edit')
                                                    <a href="{{route('clients.edit', $client)}}" class="btn btn-success" style="color: white">Editar</a>
                                                    @endcan
                                                    <a href="{{route('clients.index')}}" class="btn btn-primary" style="color: white">Volver</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="profile-feed py-4">
                                                    <div class="d-flex align-items-start profile-feed-item">
                                                        <div class="form-group col-md-6">
                                                            <strong>
                                                                <i class="fab fa-product-hunt mr-1"> Nombre</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->name}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-address-card mr-1"> DNI</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->dni}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-address-card mr-1"> Numero de RUC</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->ruc}}
                                                            </p>
                                                            <hr>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <strong>
                                                                <i class="fas fa-map-marked-alt mr-1"> Dirección</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->address}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-phone-alt mr-1"> Teléfono/celular</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->phone}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-envelope mr-1"> Correo electrónico</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$client->email}}
                                                            </p>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
