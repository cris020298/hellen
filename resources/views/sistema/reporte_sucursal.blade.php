@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')
	<h1>Sucursales</h1>
	<br>
    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Empleado</td><td>Acciones</td>
		
	</tr>
			</thead>
<tbody class="sui-hide">
@foreach($sucursales as $su)
<tr  class="sui-row" role="row">	
	<td>{{$su->id_sucursal}}</td>	
	<td>{{$su->nombre}}</td>
	<td>{{$su->direccion}}</td>
	<td>{{$su->telefono}}</td>
	<td>{{$su->e}}</td>
	<td><a href="{{URL::action('sucursalesc@eliminasu',['id_sucursal'=>$su->id_sucursal])}}">Eliminar</a> 
		<a href="{{URL::action('sucursalesc@modificasu',['id_sucursal'=>$su->id_sucursal])}}">Modificar</a> 
	</td>
	
</tr>
@endforeach
</table>
</div>
	
@stop