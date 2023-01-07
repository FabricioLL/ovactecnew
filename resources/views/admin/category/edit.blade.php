@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Edición de categoría</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorías</a></li>
                    <li class="breadcrumb-item active">Editar categoría</li>
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
                                {!! Form::model($category, ['route'=>['categories.update',$category], 'method'=>'PUT']) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Ingrese nombre de la categoría" required>
                                </div>

                                <div class="form-group">
                                  <label for="description" class="form-label">Descripción</label>
                                  <textarea name="description" id="description" cols="30" rows="3" placeholder="Descripción de la categoría" class="form-control">{{$category->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-2">Actualizar</button>
                                    <a href="{{route('categories.index')}}" class="btn btn-light mx-2 mt-2">Cancelar</a>
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

