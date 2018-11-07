@extends('sistema.principal')
    <title>Ventas</title>
@section('contenido')
	<h1>Ventas</h1>
	<br>
    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Fecha de la Venta</td><td>Empleado</td><td>Clientes</td>
		
	</tr>
			</thead>
<tbody class="sui-hide">
@foreach($ventas as $ven)
<tr  class="sui-row" role="row">
	<td>{{$ven->id_venta}}</td>	
	<td>{{$ven->fecha_venta}}</td>
	<td>{{$ven->e}}</td>
	<td>{{$ven->c}}</td>
	
</tr>
@endforeach
</table>
</div>
	
@stop