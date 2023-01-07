@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Detalles de compra</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('purchases.index')}}">Compras</a></li>
                    <li class="breadcrumb-item active">{{$purchase->code_fact}}</li>
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
                                        <img src="{{asset('/img/purchase.png')}}" alt="image" class="avatar" width="45" height="45" />
                                        <h4 class="title mx-4 mt-2" style="color: black">Código de compra Nº {{$purchase->code_fact}}</h4>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <div class="col-md-4 text-center">
                                                        <label class="form-control-label" for="nombre"><strong>Proveedor</strong></label>
                                                        <p>{{$purchase->provider->name}}</p>
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <label class="form-control-label" for="num_compra"><strong>Número Compra</strong></label>
                                                        <p>{{$purchase->id}}</p>
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <label class="form-control-label" for="num_compra"><strong>Comprador</strong></label>
                                                        <p>{{$purchase->user->name}}</p>
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <div class="form-group row ">
                                                    <h4 class="card-title ml-3">Detalles de compra</h4>
                                                    <div class="table-responsive col-md-12">
                                                        <table id="detalles" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Producto</th>
                                                                    <th>Precio (PEN)</th>
                                                                    <th>Cantidad</th>
                                                                    <th>SubTotal (PEN)</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                {{-- <tr>
                                                                    <th colspan="3">
                                                                        <p align="right">SUBTOTAL:</p>
                                                                    </th>
                                                                    <th>
                                                                        <p align="right">s/{{number_format($subtotal,2)}}</p>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p align="right">TOTAL IMPUESTO ({{$purchase->tax}}%):</p>
                                                                    </th>
                                                                    <th>
                                                                        <p align="right">s/{{number_format($subtotal*$purchase->tax/100,2)}}</p>
                                                                    </th>
                                                                </tr> --}}
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <p align="right">TOTAL PAGADO:</p>
                                                                    </th>
                                                                    <th>
                                                                        <p align="right">s/{{number_format($purchase->total,2)}}</p>
                                                                    </th>
                                                                </tr>

                                                            </tfoot>
                                                            <tbody>
                                                                @foreach($purchaseDetails as $purchaseDetail)
                                                                <tr>
                                                                    <td>{{$purchaseDetail->product->name }}</td>
                                                                    <td>s/{{$purchaseDetail->price}}</td>
                                                                    <td>{{$purchaseDetail->quantity}}</td>
                                                                    <td>s/{{number_format($purchaseDetail->quantity*$purchaseDetail->price,2)}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <a href="{{route('purchases.index')}}" class="btn btn-secondary float-right" style="color: white; padding-left: 60px; padding-right: 60px">Regresar</a>
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
