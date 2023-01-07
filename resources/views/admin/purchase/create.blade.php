@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Registro de Compras</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('purchases.index')}}">Compras</a></li>
                    <li class="breadcrumb-item active">Registro de compra</li>
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
                            {!! Form::open(['route'=>'purchases.store', 'method'=>'POST']) !!}
                            @csrf
                            <div class="card-body table-responsive p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <h5 class="mb-4" style="font-weight: bold">Selección de producto</h5>
                                                </div>

                                                <div class="form-group">
                                                    <label for="product_id" class="form-label">Producto</label>
                                                    <select class="form-control" name="product_id" id="product_id">
                                                        <option value="" disabled selected>Selecccione un producto</option>
                                                        @foreach ($products as $product)
                                                            <option value="{{$product->id}}_{{$product->sell_price}}">{{$product->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label for="tax" class="form-label">Impuesto</label>
                                                    <input type="number" name="tax" id="tax" class="form-control" placeholder="18%" >
                                                </div> --}}

                                                <div class="form-group">
                                                    <label for="price" class="form-label">Costo Por Unidad</label>
                                                    <input type="number" name="price" id="price" class="form-control" placeholder="" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantity" class="form-label">Cantidad</label>
                                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Ingrese la cantidad a comprar" >
                                                </div>

                                                <div class="form-group">
                                                    <button type="button" id="agregar" class="btn btn-primary float-right mt-2">Agregar producto</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <h5 class="mb-4" style="font-weight: bold">Detalles de compra</h5>
                                                    <div style="height: 300px;" class="table-responsive mb-4">
                                                        <table  id="detalles" class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Producto</th>
                                                                    <th>Precio(PEN)</th>
                                                                    <th>Cantidad</th>
                                                                    <th>SubTotal(PEN)</th>
                                                                    <th>Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                            </tfoot>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <p align="right"><span align="right" id="total_pagar_html" style="font-weight: bold">TOTAL PAGAR: 0.00</span> <input type="hidden"
                                                            name="total" id="total_pagar"></p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <label for="provider_id" class="form-label mt-2 ml-3 mr-5">Proveedores</label>
                                                        <select class="form-control mx-1 col-md-9" name="provider_id" id="provider_id">
                                                            <option value="" disabled selected>Selecccione un proveedor</option>
                                                            @foreach ($providers as $provider)
                                                                <option value="{{$provider->id}}">{{$provider->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="d-flex">
                                                        <label for="code_fact" class="form-label mt-2 ml-3">Código de factura</label>
                                                        <input type="number" name="code_fact" id="code_fact" class="form-control mx-3 col-md-9" placeholder="Ingrese el codigo de factura" >
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <div class="mx-auto" id="guardar">

                                                            <button type="submit" id="guardar1" class="btn btn-success float-right" style="color: white; padding-left: 60px; padding-right: 60px">Registrar</button>


                                                        </div>
                                                        <div class="mx-auto">
                                                            <a href="{{route('purchases.index')}}" class="btn btn-secondary" style="color: white; padding-left: 60px; padding-right: 60px">
                                                                Cancelar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
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
{!! Html::script('select/dist/js/bootstrap-select.min.js') !!}
{!! Html::script('js/sweetalert2.all.min.js') !!}

<script>
    $(document).ready(function () {
        $("#agregar").click(function () {
            agregar();

        });
    });

    var cont = 0;
    total = 0;
    subtotal = [];

    $("#guardar").hide();
    $("#guardar1").hide();
    $("#product_id").change(mostrarValores);
    function mostrarValores(){
        datosProducto = document.getElementById('product_id').value.split('_');
        $("#price").val(datosProducto[1]);
    }
    function agregar() {

        datosProducto = document.getElementById('product_id').value.split('_');
        product_id = datosProducto[0];
        producto = $("#product_id option:selected").text();
        quantity = $("#quantity").val();
        price = $("#price").val();

        if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
            subtotal[cont] = quantity * price;
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila'+cont+'"><td><input type="hidden" name="product_id[]" value="'+product_id+'">'+producto+'</td> <td> <input type="hidden" id="price[]" name="price[]" value="' + price + '"> <input class="form-control" type="number" id="price[]" value="' + price + '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input class="form-control" type="number" value="' + quantity + '" disabled> </td> <td align="right">s/' + subtotal[cont] + ' </td> <td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la compras',
            })
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#price").val("");
    }

    function totales() {
        $("#total").html("TOTAL PAGAR: s/ " + total.toFixed(2));
        total_impuesto = total;
        total_pagar = total;
        $("#total_impuesto").html("TOTAL PAGAR:   s/ " + total_impuesto.toFixed(2));
        $("#total_pagar_html").html("TOTAL PAGAR:   s/ " + total_pagar.toFixed(2));
        $("#total_pagar").val(total_pagar.toFixed(2));


    }

    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
            $("#guardar1").show();
        } else {
            $("#guardar").hide();
            $("#guardar1").hide();
        }
    }

    function eliminar(index) {
        total = total - subtotal[index];
        total_impuesto = total;
        total_pagar_html = total;
        $("#total").html("TOTAL PAGAR:   s/" + total);
        $("#total_impuesto").html("TOTAL PAGAR:   s/" + total_impuesto);
        $("#total_pagar_html").html("TOTAL PAGAR:   s/" + total_pagar_html);
        $("#total_pagar").val(total_pagar_html.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }

</script>
@stop
