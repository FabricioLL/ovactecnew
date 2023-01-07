@extends('adminlte::page')

@section('title', 'OVACTEC')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Registro de Ventas</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sales.index')}}">Ventas</a></li>
                    <li class="breadcrumb-item active">Registro de venta</li>
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
                            {!! Form::open(['route'=>'sales.store', 'method'=>'POST']) !!}
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
                                                            <option value="{{$product->id}}_{{$product->stock}}_{{$product->sell_price}}">{{$product->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label for="tax" class="form-label">Impuesto</label>
                                                    <input type="number" name="tax" id="tax" class="form-control" placeholder="18%" >
                                                </div> --}}

                                                <div class="form-group">
                                                    <label for="" class="form-label">Stock actual</label>
                                                    <input type="number" name="" id="stock" class="form-control" placeholder="" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantity" class="form-label">Cantidad</label>
                                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="price" class="form-label">Precio de venta</label>
                                                    <input type="number" name="price" id="price" class="form-control" placeholder="" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="discount" class="form-label">Porcentaje de descuento</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                        <input type="number" class="form-control" name="discount" id="discount" aria-describedby="basic-addon2" value="" placeholder="0">
                                                    </div>
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
                                                    <h5 class="mb-4" style="font-weight: bold">Detalles de venta</h5>
                                                    <div style="height: 300px;" class="table-responsive mb-4">
                                                        <table  id="detalles" class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Producto</th>
                                                                    <th>Precio de venta(S/)</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Descuento(%)</th>
                                                                    <th>SubTotal(S/)</th>
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
                                                        <label for="client_id" class="form-label mt-2 ml-3 mr-4">Clientes</label>
                                                        <select class="form-control mx-5 col-md-9" name="client_id" id="client_id">
                                                            <option value="" disabled selected>Selecccione un cliente</option>
                                                            @foreach ($clients as $client)
                                                                <option value="{{$client->id}}">{{$client->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="d-flex">
                                                        <label for="code_sale" class="form-label mt-2 ml-3">Código de venta</label>
                                                        <input type="number" name="code_sale" id="code_sale" class="form-control mx-3 col-md-9" placeholder="" >
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <div class="mx-auto" id="guardar">

                                                            <button type="submit" id="guardar1" class="btn btn-success float-right" style="color: white; padding-left: 60px; padding-right: 60px">Registrar</button>


                                                        </div>
                                                        <div class="mx-auto">
                                                            <a href="{{route('sales.index')}}" class="btn btn-secondary" style="color: white; padding-left: 60px; padding-right: 60px">
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
    var cont = 1;
    total = 0;
    subtotal = [];
    $("#guardar").hide();
    $("#guardar1").hide();
    $("#product_id").change(mostrarValores);
    function mostrarValores(){
        datosProducto = document.getElementById('product_id').value.split('_');
        $("#price").val(datosProducto[2]);
        $("#stock").val(datosProducto[1]);
    }

    function agregar() {
        datosProducto = document.getElementById('product_id').value.split('_');

        product_id = datosProducto[0];
        producto = $("#product_id option:selected").text();
        quantity = $("#quantity").val();
        discount = $("#discount").val();
        price = $("#price").val();
        stock = $("#stock").val();
        if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
            if(discount == ""){
                discount = 0;
            }
            if (parseInt(stock) >= parseInt(quantity)) {
                subtotal[cont] = (quantity * price) - (quantity * price * discount / 100);
                total = total + subtotal[cont];
                var fila = '<tr class="selected" id="fila' + cont + '"> <td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td> <td> <input type="hidden" name="price[]" value="' + parseFloat(price).toFixed(2) + '"> <input class="form-control" type="number" value="' + parseFloat(price).toFixed(2) + '" disabled> </td> <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input type="number" value="' + quantity + '" class="form-control" disabled> </td> <td> <input type="hidden" name="discount[]" value="' + parseFloat(discount) + '"> <input class="form-control" type="number" value="' + parseFloat(discount) + '" disabled> </td> <td align="right">s/' + parseFloat(subtotal[cont]).toFixed(2) + '</td> <td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');"><i class="fa fa-times"></i></button></td> </tr>';
                cont++;
                limpiar();
                totales();
                evaluar();
                $('#detalles').append(fila);
            } else {
                Swal.fire({
                    type: 'error',
                    text: 'La cantidad a vender supera el stock.',
                })
            }
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la venta.',
            })
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#discount").val("");
    }
    function totales() {
        $("#total").html("TOTAL PAGAR:   s/ " + total.toFixed(2));
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
