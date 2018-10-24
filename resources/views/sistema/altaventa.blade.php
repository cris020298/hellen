<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Alta id_venta</h1>

<form action = "{{route('guardaventa')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_venta'))
<i> {{ $errors->first('id_venta')}}</i>
@endif     <br>
Clave: <input type='text' name='id_venta' value="{{$id_vens}}" readonly='readonly'>
<br>

@if($errors->first('fecha_venta'))
<i> {{ $errors->first('fecha_venta')}}</i>
@endif     <br>
Fecha Venta: <input type='text' name='fecha_venta' value="{{old('fecha_venta')}}">
<br>
<br>

Selecciona Empleado: <select name='id_empleado'>
	@foreach($empleados as $em)
	<option value='{{$em->id_empleado}}'>{{$em->nombre}}</option>
	@endforeach
</select>
<br>
<br>
Selecciona Cliente: <select name='id_cliente'>
	@foreach($clientes as $cl)
	<option value='{{$cl->id_cliente}}'>{{$cl->nombre}}</option>
	@endforeach
</select>
<br>
<br>
<input type='submit' name='Guardar'>

</form>

</body>
</html>