@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Listado de Ventas</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
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
                                    @can('sales.create')
                                        <a href="{{route('sales.create')}}"><button type="button" class="btn btn-primary">Registrar venta</button></a>
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
                                        <th>Fecha</th>
                                        <th>Total</th>
                                        <th>Estado</th>
                                        <th width="200px">Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($sales as $sale)
                                            <tr>
                                                <th scope="row">{{$sale->id}}</th>
                                                <td>{{$sale->sale_date}}</td>
                                                <td>{{$sale->total}}</td>
                                                @if ($sale->status == 'VALID')
                                                <td>
                                                    <a class="jsgrid-button btn btn-success" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                        Activo <i class="fas fa-check"></i>
                                                    </a>
                                                </td>
                                                @else
                                                <td>
                                                    <a class="jsgrid-button btn btn-danger" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                        Desactivado <i class="fas fa-times"></i>
                                                    </a>
                                                </td>
                                                @endif
                                                <td>
                                                    @can('sales.pdf')
                                                    <a class="btn btn-danger mr-1"
                                                        href="{{route('sales.pdf',$sale)}}"><i class="fas fa-file-pdf"></i>
                                                    </a>
                                                    @endcan

                                                    @can('sales.print')
                                                    <a class="btn btn-info mr-1"
                                                        href="{{route('sales.print',$sale)}}"><i class="fas fa-print"></i>
                                                    </a>
                                                    @endcan

                                                    @can('sales.show')
                                                    <a href="{{route('sales.show',$sale)}}" class="btn btn-secondary mr-1"><i class="fas fa-eye"></i></a>
                                                    @endcan

                                                    {{-- @can('purchases.destroy')
                                                    <form action= "{{route('purchases.destroy', $purchase)}}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    @endcan --}}
                                                </td>
                                            </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{$sales->links()}}
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
