@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Listado de Roles</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Roles</li>
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
                                    @can('roles.create')
                                    <a href="{{route('roles.create')}}"><button type="button" class="btn btn-primary">Agregar rol</button></a>
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
                                        <th width="200px">Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($roles as $role)
                                            <tr>
                                                <th scope="row">{{$role->id}}</th>
                                                <td>{{$role->name}}</td>

                                                {{-- <td>
                                                    @forelse ($role->permissions as $permission)
                                                        <span class="badge badge-info">{{$permission->description}}</span>
                                                    @empty
                                                    <span class="badge badge-danger">Sin permisos</span>
                                                    @endforelse
                                                </td> --}}

                                                <td>
                                                    @can('roles.show')
                                                    <a href="{{route('roles.show',$role)}}" class="btn btn-secondary mr-1"><i class="fas fa-info-circle"></i></a>
                                                    @endcan

                                                    @can('roles.edit')
                                                    <a class="btn btn-info mr-1"
                                                        href="{{route('roles.edit', $role)}}"><i class="fas fa-edit"></i>
                                                    </a>
                                                    @endcan

                                                    @can('roles.destroy')
                                                    <form action= "{{route('roles.destroy', $role)}}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{$roles->links()}}
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
