@extends('sistema.principal')
    <title>Sucursales</title>
@section('contenido')
	<h1>Modifica Sucursal</h1>

<form action = "{{route('guardamodificasu')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_sucursal'))
<i> {{ $errors->first('id_sucursal')}}</i>
@endif     <br>
Clave: <input type='text' name='id_sucursal' value="{{$sucursal->id_sucursal}}" readonly='readonly' class="form-control">
<br>

@if($errors->first('nombre'))
<i> {{ $errors->first('nombre')}}</i>
@endif     <br>
Nombre: <input type='text' name='nombre' value="{{$sucursal->nombre}}" class="form-control">
<br>

@if($errors->first('direccion'))
<i> {{ $errors->first('direccion')}}</i>
@endif     <br>
Direccion: <input type='text' name='direccion' value="{{$sucursal->direccion}}" class="form-control">
<br>

@if($errors->first('telefono'))
<i> {{ $errors->first('telefono') }}</i>
@endif     <br>
Telefono: <input type='text' name='telefono' value="{{$sucursal->telefono}}" class="form-control">
<br>

<br>
Selecciona empleado: <select name='id_empleado' class="form-control">
	<option value='{{$id_empleado}}'>{{$empleado}}</option>
	 @foreach($otrosempleados as $em)
	 <option value='{{$em->id_empleado}}'>{{$em->nombre}}</option> 
	 @endforeach

</select>

<br>
<input type='submit' class="btn btn-primary" name='Guardar'>

</form>
@stop