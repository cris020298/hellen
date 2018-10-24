<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Reporte de Sucursales</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Nombre</td><td>Direccion</td><td>Telefono</td>
		
	</tr>
@foreach($sucursales as $su)
<tr>
	<td>{{$su->id_sucursal}}</td>	
	<td>{{$su->nombre}}</td>
	<td>{{$su->direccion}}</td>
	<td>{{$su->telefono}}</td>
	
</tr>
@endforeach
</table>
	
</body>
</html>