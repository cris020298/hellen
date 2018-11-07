@extends('sistema.principal')
    <title>Empleados</title>
@section('contenido')
<h1>Alta Empleados</h1>

<form action = "{{route('guardaempleado')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_empleado'))
<i> {{ $errors->first('id_empleado')}}</i>
@endif     <br>
Clave: <input type='text' name='id_empleado' value="{{$id_emps}}" readonly='readonly ' class="form-control">
<br>

@if($errors->first('tipo'))
<i> {{ $errors->first('tipo')}}</i>
@endif     <br>
Tipo: <input type='text' name='tipo' value="{{old('tipo')}}" class="form-control">
<br>

@if($errors->first('nombre'))
<i> {{ $errors->first('nombre')}}</i>
@endif     <br>
Nombre: <input type='text' name='nombre' value="{{old('nombre')}}" class="form-control">
<br>

@if($errors->first('apellido_p'))
<i> {{ $errors->first('apellido_p')}}</i>
@endif     <br>
Apellido Paterno: <input type='text' name='apellido_p' value="{{old('apellido_p')}}" class="form-control">
<br>

@if($errors->first('apellido_m'))
<i> {{ $errors->first('apellido_m')}}</i>
@endif     <br>
Apellido Materno: <input type='text' name='apellido_m' value="{{old('apellido_m')}}" class="form-control">
<br>

@if($errors->first('edad'))
<i> {{ $errors->first('edad')}}</i>
@endif     <br>
Edad: <input type='text' name='edad' value="{{old('edad')}}" class="form-control">
<br>

<br>
Sexo: <input type='radio' name='sexo' value='M' checked>M
<input type='radio' name='sexo' value='F'>F
<br>

@if($errors->first('direccion'))
<i> {{ $errors->first('direccion')}}</i>
@endif     <br>
Direccion: <input type='text' name='direccion' value="{{old('direccion')}}" class="form-control">
<br>

@if($errors->first('telefono'))
<i> {{ $errors->first('cp')}}</i>
@endif     <br>
Telefono: <input type='text' name='telefono' value="{{old('telefono')}}" class="form-control">
<br>

@if($errors->first('correo'))
<i> {{ $errors->first('correo')}}</i>
@endif     <br>
Correo: <input type='correo' name='correo' value="{{old('correo')}}" class="form-control">
<br>

<br>
Activo: <input type='radio' name='activo' value='SI' checked>SI
<input type='radio' name='activo' value='NO'>NO
<br>

@if($errors->first('archivo'))
<i> {{ $errors->first('archivo')}}</i>
@endif     <br>
<span class="btn btn-primary btn-file">
Seleccione foto <input type='file' name='archivo'>
</span>
<br>

<br>
<input type='submit' class="btn btn-primary" name='Guardar'>

</form>
@stop