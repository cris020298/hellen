<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>USUARIOS</h1>
	<br>
<table border= 1>
	<tr>
		<td>Clave</td><td>Nombre</td><td>Correo</td><td>Contraseña</td>
	</tr>
@foreach($users as $usu)
<tr>
	<td>{{$usu->id}}</td>
	<td>{{$usu->name}}</td>
	<td>{{$usu->email}}</td>
	<td>{{$usu->password}}</td>
	
	
	
</tr>
@endforeach
</table>
	
</body>
</html>