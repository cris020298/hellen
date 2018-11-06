<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>Sucursales</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Empleado</td><td>Acciones</td>
		
	</tr>
@foreach($sucursales as $su)
<tr>
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
	
</body>
</html>