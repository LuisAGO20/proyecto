<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte Ventas PDF</title>
    <style>
        #emp{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 550;
        }
        #emp td, #emp th{
            border: 1px solid #ddd;
            padding: 18px;
        }
        #emp th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #A9A9A9;
            color;
        }
    </style>
    <h2><strong>Reporte de Ventas Almacén</strong></h2>
</head>
<body>
    <table id="emp">
        <thead>
            <tr>
                <th> Fecha Venta</th>
                <th> Nombre Producto</th>
                <th> Cantidad</th>
                <th> Total a Pagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listado_ventas as $venta )
                <tr>
                    <td>{{ $venta->created_at}}</td>
                    <td>@if($venta->producto){{ $venta->producto->nombre}}@endif</td>
                    <td>{{ $venta->cantidad}}</td>
                    <td>{{ $venta->total}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
