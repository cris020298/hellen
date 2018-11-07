@extends('sistema.principal')
    <title>Productos</title>
@section('contenido')

	<h1>Productos</h1>
	<br>

    <div class="row">
	<div class="table-responsive">
<table id="order_data" class="table table-bordered table-striped sui-table sui-hover sui-selectable">
	<thead align="center">
	<tr role="row" class="sui-columnheader">
		<td>Clave</td><td>Modelo</td><td>Color</td><td>Numero</td><td>Estilo</td><td>Precio</td><td>Existencia</td><td>Foto<td>Acciones</td>
		
	</tr>
</thead>
<tbody class="sui-hide">
@foreach($productos as $pro)
<tr  class="sui-row" role="row">
	<td>{{$pro->id_producto}}</td>	
	<td>{{$pro->modelo}}</td>
	<td>{{$pro->color}}</td>
	<td>{{$pro->numero}}</td>
	<td>{{$pro->estilo}}</td>
	<td>{{$pro->precio}}</td>
	<td>{{$pro->existencia}}</td>
	<td><img src="{{asset('archivos/'.$pro->archivo)}}" height="50" width="50"></td>
	
	<td><a href="{{URL::action('productosc@eliminapro',['id_producto'=>$pro->id_producto])}}">Eliminar</a> 
		<a href="{{URL::action('productosc@modificapro',['id_producto'=>$pro->id_producto])}}">Modificar</a> 
	</td>
	
</tr>
@endforeach
</tbody>
</table>
</div>
	
@stop