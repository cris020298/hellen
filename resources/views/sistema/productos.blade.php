<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<h1>Alta Producto</h1>

<form action = "{{route('guardaproducto')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_producto'))
<i> {{ $errors->first('id_producto')}}</i>
@endif     <br>
Clave: <input type='text' name='id_producto' value="{{$id_productos}}" readonly='readonly'>
<br>

@if($errors->first('modelo'))
<i> {{ $errors->first('modelo')}}</i>
@endif     <br>
Modelo: <input type='text' name='modelo' value="{{old('color')}}">
<br>

@if($errors->first('color'))
<i> {{ $errors->first('color')}}</i>
@endif     <br>
Color: <input type='text' name='color' value="{{old('color')}}">
<br>

@if($errors->first('numero'))
<i> {{ $errors->first('numero')}}</i>
@endif     <br>
Numero: <input type='numero' name='numero' value="{{old('numero')}}">
<br>

@if($errors->first('estilo'))
<i> {{ $errors->first('estilo')}}</i>
@endif     <br>
Estilo: <input type='text' name='estilo' value="{{old('estilo')}}">
<br>

@if($errors->first('precio'))
<i> {{ $errors->first('precio')}}</i>
@endif     <br>
Precio: <input type='text' name='precio' value="{{old('precio')}}">
<br>

@if($errors->first('existencia'))
<i> {{ $errors->first('existencia')}}</i>
@endif     <br>
Existencia: <input type='text' name='existencia' value="{{old('existencia')}}">
<br>

<input type='submit' name='Guardar'>

</form>

</body>
</html>
