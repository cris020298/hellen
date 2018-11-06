<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Clientes</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>DIreccion<td>Telefono</td><td>Correo</td>
		
	</tr>
@foreach($clientes as $cli)
<tr>
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
	
</body>
</html>