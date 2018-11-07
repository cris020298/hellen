@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')

	<h1>Clientes</h1>
	<br>

    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>DIreccion<td>Telefono</td><td>Correo</td>
		
	</tr>
	</thead>
<tbody class="sui-hide">
@foreach($clientes as $cli)
<tr  class="sui-row" role="row">

	<td>{{$cli->id_cliente}}</td>
	<td>{{$cli->nombre}}</td>
	<td>{{$cli->apellido_p}}</td>
	<td>{{$cli->apellido_m}}</td>
	<td>{{$cli->edad}}</td>
	<td>{{$cli->sexo}}</td>
	<td>{{$cli->direccion}}</td>
	<td>{{$cli->telefono}}</td>
	<td>{{$cli->correo}}</td>
	
	
	
</tr>
@endforeach
</table>
</div>
	
@stop