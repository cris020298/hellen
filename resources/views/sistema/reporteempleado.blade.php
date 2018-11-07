@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')
	<h1>Empleados</h1>
    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Tipo</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>DIreccion<td>Telefono</td><td>Correo</td>
		
	</tr>
		</thead>
<tbody class="sui-hide">
@foreach($empleados as $emp)
<tr  class="sui-row" role="row">
	<td>{{$emp->id_empleado}}</td>	
	<td>{{$emp->tipo}}</td>
	<td>{{$emp->nombre}}</td>
	<td>{{$emp->apellido_p}}</td>
	<td>{{$emp->apellido_m}}</td>
	<td>{{$emp->edad}}</td>
	<td>{{$emp->sexo}}</td>
	<td>{{$emp->direccion}}</td>
	<td>{{$emp->telefono}}</td>
	<td>{{$emp->correo}}</td>
	
	
	
</tr>
@endforeach
</table>
</div>
	
@stop