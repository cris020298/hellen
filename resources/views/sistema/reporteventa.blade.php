<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ventas</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Fecha de la Venta</td><td>Empleado</td><td>Clientes</td>
		
	</tr>
@foreach($ventas as $ven)
<tr>
	<td>{{$ven->id_venta}}</td>	
	<td>{{$ven->fecha_venta}}</td>
	<td>{{$ven->e}}</td>
	<td>{{$ven->c}}</td>
	
</tr>
@endforeach
</table>
	
</body>
</html>