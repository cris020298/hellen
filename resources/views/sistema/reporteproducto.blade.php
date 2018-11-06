<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>Productos</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Modelo</td><td>Color</td><td>Numero</td><td>Estilo</td><td>Precio</td><td>Existencia</td><td>Foto<td>Acciones</td>
		
	</tr>
@foreach($productos as $pro)
<tr>
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
</table>
	
</body>
</html>