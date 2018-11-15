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
		<td>Clave</td><td>Nombre</td><td>Calle</td><td>Numero Interior</td><td>Numero Exterior</td><td>Colonia</td><td>Municipio</td><td>Estado</td><td>Codigo Postal</td><td>Telefono</td><!-- <td>suleado</td> --><td>Acciones</td>
		
	</tr>
			</thead>
<tbody class="sui-hide">
@foreach($sucursales as $su)
<tr  class="sui-row" role="row">	
	<td>{{$su->id_sucursal}}</td>	
	<td>{{$su->nombre}}</td>
	<td>{{$su->calle}}</td>
	<td>{{$su->numeroint}}</td>
	<td>{{$su->numeroext}}</td>
	<td>{{$su->colonia}}</td>
	<td>{{$su->municipio}}</td>
	<td>{{$su->estado}}</td>
	<td>{{$su->codigopostal}}</td>
	<td>{{$su->telefono}}</td>
<!-- 	<td>{{$su->e}}</td> -->
	<td><a href="{{URL::action('sucursalesc@eliminasu',['id_sucursal'=>$su->id_sucursal])}}">Eliminar</a> 
		<a href="{{URL::action('sucursalesc@modificasu',['id_sucursal'=>$su->id_sucursal])}}">Modificar</a> 
	</td>
	
</tr>
@endforeach
</table>
</div>
	
@stop