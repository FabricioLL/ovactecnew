@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Edición de usuario</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuario</a></li>
                    <li class="breadcrumb-item active">Editar usuario</li>
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
                                {!! Form::model($user, ['route'=>['users.update',$user], 'method'=>'PUT']) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" placeholder="Ingrese nombre de usuario" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="Ingrese email de usuario" required>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" name="password" id="password"  value="" class="form-control" placeholder="Ingrese contraseña de usuario" required>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-form-label">Roles</label>
                                    <div class="row">
                                        @foreach ($roles as $id => $role)
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-2">
                                            <input type="checkbox" name="roles[]" value="{{$id}}"{{$user->roles->contains($id) ? 'checked' : ''}} style="width: 20px; height: 2;">
                                            <span>{{$role}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-2">Actualizar</button>
                                    <a href="{{route('users.index')}}" class="btn btn-light mx-2 mt-2">Cancelar</a>
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
