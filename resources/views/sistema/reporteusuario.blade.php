@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')
	<h1>USUARIOS</h1>
	<br>
    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Nombre</td><td>Correo</td><td>Contraseña</td>
	</tr>
			</thead>
<tbody class="sui-hide">
@foreach($users as $usu)
<tr  class="sui-row" role="row">
	<td>{{$usu->id}}</td>
	<td>{{$usu->name}}</td>
	<td>{{$usu->email}}</td>
	<td>{{$usu->password}}</td>
	
	
	
</tr>
@endforeach
</table>
</div>
	
@stop