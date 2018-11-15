@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')
	<h1>Empleados</h1>
    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Tipo</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>Calle</td><td>Numero Interior</td><td>Numero Exterior</td><td>Colonia</td><td>Municipio</td><td>Estado</td><td>Codigo Postal</td><td>Telefono</td><td>Correo</td><td>Archivo</td><td>Acciones</td>
		 
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
	<td>{{$emp->calle}}</td>
	<td>{{$emp->numeroint}}</td>
	<td>{{$emp->numeroext}}</td>
	<td>{{$emp->colonia}}</td>
	<td>{{$emp->municipio}}</td>
	<td>{{$emp->estado}}</td>
	<td>{{$emp->codigopostal}}</td>
	<td>{{$emp->telefono}}</td>
	<td>{{$emp->correo}}</td>
	<td><img src="{{asset('archivos/'.$emp->archivo)}}" height="50" width="50"></td>
	<td><a href="{{URL::action('empleadosc@eliminaemp',['id_empleado'=>$emp->id_empleado])}}">Eliminar</a> 
		<a href="{{URL::action('empleadosc@modificaemp',['id_empleado'=>$emp->id_empleado])}}">Modificar</a> 
	</td>
	
</tr>
@endforeach
</table>
</div>
	
@stop