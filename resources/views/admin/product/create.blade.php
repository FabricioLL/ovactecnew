@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Registro de productos</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Productos</a></li>
                    <li class="breadcrumb-item active">Registro de producto</li>
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
                                {!! Form::open(['route'=>'products.store', 'method'=>'POST','files'=>true]) !!}
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese nombre del producto" required>
                                </div>

                                <div class="form-group">
                                    <label for="sell_price" class="form-label">Precio de venta</label>
                                    <input type="number" step="0.01" name="sell_price" id="sell_price" class="form-control" placeholder="Ingrese precio de venta del producto" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_id" class="form-label">Categoría</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="" disabled selected>Selecccione una categoría</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="form-label">Imagen del producto</label>
                                    <div class="image">
                                        <input type="file" class="image-input" id="picture" name="picture" lang="es">
                                        <label class="image-label mt-2" for="image" ></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-3">Registrar</button>
                                    <a href="{{route('products.index')}}" class="btn btn-light mx-2 mt-3">Cancelar</a>
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
