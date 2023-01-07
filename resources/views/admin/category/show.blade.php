@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Información de la categoría</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorías</a></li>
                    <li class="breadcrumb-item active">{{$category->name}}</li>
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
                                        <img src="{{asset('/img/category.png')}}" alt="image" class="avatar" width="50" height="50" />
                                        <h3 class="title mx-4 pt-2" style="color: black">{{$category->name}}</h3>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-md-3" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <hr>
                                                    @can('categories.edit')
                                                    <a href="{{route('categories.edit', $category)}}" class="btn btn-success col-md-12" style="color: white">Editar</a>
                                                    @endcan
                                                    <a href="{{route('categories.index')}}" class="btn btn-primary col-md-12" style="color: white">Volver</a>
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
                                                                {{$category->name}}
                                                            </p>
                                                            <hr>
                                                            <strong>
                                                                <i class="fas fa-calendar-alt"> Fecha de creación</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$category->created_at}}
                                                            </p>
                                                            <hr>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <strong>
                                                                <i class="fas fa-calendar-alt"> Descripción</i>
                                                            </strong>
                                                            <p class="text-muted">
                                                                {{$category->description}}
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
