@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Registro de roles</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
                    <li class="breadcrumb-item active">Registro de rol</li>
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
                                {!! Form::open(['route'=>'roles.store', 'method'=>'POST']) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese nombre del rol">
                                    @error('name')
                                        <small class="text-danger">
                                            {{$message}}
                                        </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-form-label">Permisos</label>
                                    <div class="row">
                                        @foreach ($permissions as $id => $permission)
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-2">
                                            <input type="checkbox" name="permissions[]" value="{{$id}}" style="width: 20px; height: 2;">
                                            <span>{{$permission}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- <div class="">
                                    <label for="name" class="col-form-label">Permisos</label>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach ($permissions as $id => $permission)
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input class="form-check.input" type="checkbox" name="permissions[]" value="{{$id}}">
                                                                            <span class="form-check-sign">
                                                                                <span class="check"></span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    {{$permission}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-group ">
                                    <button type="submit" class="btn btn-success mt-2">Registrar</button>
                                    <a href="{{route('roles.index')}}" class="btn btn-light mx-2 mt-2">Cancelar</a>
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
