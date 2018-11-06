<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 

<h1>Alta Sucursal</h1>

<form action = "{{route('guardasucursal')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_sucursal'))
<i> {{ $errors->first('id_sucursal')}}</i>
@endif     <br>
Clave: <input type='text' name='id_sucursal' value="{{$id_sucurs}}" readonly='readonly'>
<br>

@if($errors->first('nombre'))
<i> {{ $errors->first('nombre')}}</i>
@endif     <br>
Nombre: <input type='text' name='nombre' value="{{old('nombre')}}">
<br>
<br>
@if($errors->first('direccion'))
<i> {{ $errors->first('direccion')}}</i>
@endif     <br>
Direccion: <input type='text' name='direccion' value="{{old('direccion')}}">
<br>
<br>
@if($errors->first('telefono'))
<i> {{ $errors->first('telefono')}}</i>
@endif     <br>
Telefono: <input type='text' name='telefono' value="{{old('telefono')}}">
<br>
<br>
Selecciona Empleado: <select name='id_empleado'>
	@foreach($empleados as $em)
	<option value='{{$em->id_empleado}}'>{{$em->nombre}}</option>
	@endforeach
</select>
<br>
<br>
<input type='submit' name='Guardar'>

</form>

</body>
</html>