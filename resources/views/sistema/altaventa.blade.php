@extends('sistema.principal')
    <title>Ventas</title>
@section('contenido')
<h1>Alta Ventas</h1>

<form action = "{{route('guardaventa')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_venta'))
<i> {{ $errors->first('id_venta')}}</i>
@endif     <br>
Clave: <input type='text' name='id_venta' value="{{$id_vens}}" readonly='readonly' class="form-control">
<br>

@if($errors->first('fecha_venta'))
<i> {{ $errors->first('fecha_venta')}}</i>
@endif     <br>
Fecha Venta: <input type='date' name='fecha_venta' value="{{old('fecha_venta')}}" class="form-control">
<br>
<br>

Selecciona Empleado: <select name='id_empleado' class="form-control">
	@foreach($empleados as $em)
	<option value='{{$em->id_empleado}}'>{{$em->nombre}}</option>
	@endforeach
</select>
<br>
<br>
Selecciona Cliente: <select name='id_cliente' class="form-control">
	@foreach($clientes as $cl)
	<option value='{{$cl->id_cliente}}'>{{$cl->nombre}}</option>
	@endforeach
</select>
<br>
<br>
<input type='submit' class="btn btn-primary" name='Guardar'>

</form>
@stop