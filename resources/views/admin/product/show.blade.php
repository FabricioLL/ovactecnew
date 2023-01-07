@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Información de producto</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Productos</a></li>
                    <li class="breadcrumb-item active">{{$product->name}}</li>
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
                                        <img src="{{asset('/img/product.png')}}" alt="image" class="avatar" width="45" height="45" />
                                        <h4 class="title mx-4 mt-2" style="color: black">{{$product->name}}</h4>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-md-12" style="margin-top: 15px">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="profile-feed py-2">
                                                    <div class="d-flex align-items-start profile-feed-item">
                                                        <div class="form-group col-md-6">
                                                            <div class="list-group text-center mt-3">
                                                                <a href="#">
                                                                    <img src="{{asset('image/'.$product->image)}}" alt="profile" class="img mb-3" width="250" height="253"/>
                                                                </a>
                                                            </div>
                                                            <hr>
                                                            <div class="col-md-7 mx-auto">
                                                                @if ($product->status == 'ACTIVE')
                                                                <button class="btn btn-success btn-block">{{$product->status}}</button>
                                                                @else
                                                                <button class="btn btn-danger btn-block">{{$product->status}}</button>
                                                                @endif
                                                            </div>

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <h4 class="text-center">Detalle del producto</h4>
                                                            <br>
                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-centercode mr-1"> Codigo</span>
                                                                <span class="float-right text-muted">{{$product->code}}</span>
                                                            </p>

                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-elementor mr-1"> Estado</span>
                                                                <span class="float-right text-muted">{{$product->status}}</span>
                                                            </p>

                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-product-hunt mr-1"> Nombre</span>
                                                                <span class="float-right text-muted">{{$product->name}}</span>
                                                            </p>

                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-dropbox mr-1"> Stock</span>
                                                                <span class="float-right text-muted">{{$product->stock}}</span>
                                                            </p>

                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-sellcast mr-1"> Precio de venta</span>
                                                                <span class="float-right text-muted">{{$product->sell_price}}</span>
                                                            </p>

                                                            <p class="clearfix">
                                                                <span class="float-left fab fa-cuttlefish mr-1"> Categoría</span>
                                                                <span class="float-right text-muted">{{$product->category->name}}</span>
                                                            </p>
                                                            <hr>
                                                            <div class="d-flex">
                                                                <div class="mx-auto">
                                                                    @can('products.edit')
                                                                    <a href="{{route('products.edit', $product)}}" class="btn btn-success" style="color: white; padding-left: 60px; padding-right: 60px">Editar</a>
                                                                    @endcan
                                                                </div>
                                                                <div class="mx-auto">
                                                                    <a href="{{route('products.index')}}" class="btn btn-primary" style="color: white; padding-left: 60px; padding-right: 60px">Volver</a>
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
