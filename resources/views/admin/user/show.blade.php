@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Información del usuario</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                    <li class="breadcrumb-item active">{{$user->name}}</li>
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
                                        <img src="{{asset('/img/user.png')}}" alt="image" class="avatar" width="55" height="55" />
                                        <h3 class="title mx-4 pt-2" style="color: black">{{$user->name}}</h3>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-md-3" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <hr>
                                                    @can('users.edit')
                                                    <a href="{{route('users.edit', $user)}}" class="btn btn-success col-md-12" style="color: white">Editar</a>
                                                    @endcan
                                                    <a href="{{route('users.index')}}" class="btn btn-primary col-md-12" style="color: white">Volver</a>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="profile-feed py-4">
                                                    <div class="d-flex align-items-start profile-feed-item">
                                                        <div class="form-group col-md-6">
                                                            <strong>
                                                                <i class="fas fa-user-circle"> Nombre</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$user->name}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-envelope"> Email</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$user->email}}
                                                            </p>
                                                            <hr>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <strong>
                                                                <i class="fas fa-calendar-alt"> Fecha de creación</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$user->created_at}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-address-card"> Roles</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                @forelse ($user->roles as $role)
                                                                <span class="badge badge-info">{{$role->name}}</span>
                                                                @empty
                                                                <span class="badge badge-danger">Sin roles</span>
                                                                @endforelse
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
