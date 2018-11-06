<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>Empleados</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Tipo</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>DIreccion<td>Telefono</td><td>Correo</td>
		
	</tr>
@foreach($empleados as $emp)
<tr>
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
	
</body>
</html>