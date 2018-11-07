

@extends('sistema.principal')
    <title>Clientes</title>
@section('contenido')
<h1>Alta Clientes</h1>

<form action = "{{route('guardacliente')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_cliente'))
<i> {{ $errors->first('id_cliente')}}</i>
@endif     <br>
Clave: <input type='text' name='id_cliente' value="{{$id_clients}}" readonly='readonly' class="form-control">
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
<br>
<input type='submit' class="btn btn-primary" name='Guardar'>

</form>
@stop