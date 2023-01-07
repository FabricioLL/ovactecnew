@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Listado de Usuarios</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
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
                            <div class="card-header">
                                <div class="btn-group">
                                    @can('users.create')
                                    <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary">Agregar usuario</button></a>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    @endcan
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group" style="width: 160px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

                                        <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                  <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th width="200px">Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @can('users.show')
                                                    <a href="{{route('users.show',$user)}}" class="btn btn-secondary mr-1"><i class="fas fa-info-circle"></i></a>
                                                    @endcan

                                                    @can('users.edit')
                                                    <a class="btn btn-info mr-1"
                                                    href="{{route('users.edit', $user)}}"><i class="fas fa-edit"></i>
                                                    </a>
                                                    @endcan

                                                    @can('users.destroy')
                                                    <form action= "{{route('users.destroy', $user)}}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    @endcan

                                                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                                    $user],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!} --}}
                                                </td>
                                            </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  {{$users->links()}}
                                </ul>
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
