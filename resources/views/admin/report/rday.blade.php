@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Reporte Compra por dia</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Reporte por dia</li>
                  </ol>
                </div>
              </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">

                            <div class="row ">
                                <div class="col-12 col-md-4 text-center">
                                    <span>Fecha de consulta: <b> </b></span>
                                    <div class="form-group">
                                        <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <span>Cantidad de registros: <b></b></span>
                                    <div class="form-group">
                                        <strong>{{$purchases->count()}}</strong>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <span>Total de ingresos: <b> </b></span>
                                    <div class="form-group">
                                        <strong>s/ {{$total}}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
                                        <th>Estado</th>
                                        <th width="200px">Acción</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($purchases as $purchase)
                                    <tr>
                                        <th scope="row">
                                            <a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a>
                                        </th>
                                        <td>
                                            {{\Carbon\Carbon::parse($purchase->purchase_date)->format('d M y h:i a')}}
                                        </td>
                                        <td>{{$purchase->total}}</td>
                                        <td>{{$purchase->status}}</td>
                                        <td>
                                            <a href="{{route('purchases.pdf', $purchase)}}" class="btn btn-danger mr-1"><i class="far fa-file-pdf"></i></a>

                                            <a href="{{route('purchases.show',$purchase)}}" class="btn btn-secondary mr-1"><i class="far fa-eye"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
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
{!! Html::script('melody/js/data-table.js') !!}
<script>
    window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
          dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
          mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fecha_fin').value=ano+"-"+mes+"-"+dia;
    }
</script>
@stop
