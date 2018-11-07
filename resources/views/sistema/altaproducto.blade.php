<<<<<<< HEAD
@extends('sistema.principal')
    <title>Productos</title>
@section('contenido')

=======
<!DOCTYPE html>
<html>
<head>
	 
</head> 
<body>
>>>>>>> c8ec18d6a1f28f42b27bfc2f2cc1c5b31d69432a
<h1>Alta Productos</h1>

<form action = "{{route('guardaproducto')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_producto'))
<i> {{ $errors->first('id_producto')}}</i>
@endif     <br>
Clave: <input type='text' name='id_producto' class="form-control" value="{{$id_prods}}" readonly='readonly'>
<br>

@if($errors->first('modelo'))
<i> {{ $errors->first('modelo')}}</i>
@endif     <br>
Modelo: <input type='text' name='modelo' class="form-control" value="{{old('modelo')}}">
<br>

@if($errors->first('color'))
<i> {{ $errors->first('color')}}</i>
@endif     <br>
Color: <input type='text' name='color'class="form-control"  value="{{old('color')}}">
<br>

@if($errors->first('numero'))
<i> {{ $errors->first('numero')}}</i>
@endif     <br>
Numero: <input type='number' name='numero' class="form-control" value="{{old('numero')}}">
<br>

@if($errors->first('estilo'))
<i> {{ $errors->first('estilo')}}</i>
@endif     <br>
Estilo: <input type='text' name='estilo' class="form-control" value="{{old('estilo')}}">
<br>

@if($errors->first('precio'))
<i> {{ $errors->first('precio')}}</i>
@endif     <br>
Precio:
       <div class="form-group input-group">

                <span class="input-group-addon">$</span>
                 <input type='number' min="0.00" max="10000.00" step="0.01" name='precio' class="form-control" value="{{old('precio')}}">
              </div>
<br>

@if($errors->first('existencia'))
<i> {{ $errors->first('existencia')}}</i>
@endif     <br>
Existencia: <input type='number' name='existencia' class="form-control" value="{{old('existencia')}}">
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
<<<<<<< HEAD
<br>
<input type='submit' class="btn btn-info"  name='Guardar'>
=======

<input type='submit' name='Guardar'>

>>>>>>> c8ec18d6a1f28f42b27bfc2f2cc1c5b31d69432a
</form>

@stop