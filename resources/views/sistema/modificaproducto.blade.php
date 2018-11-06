<!DOCTYPE html>
<html>
<body>
	<h1>Modifica Productos</h1>

<form action = "{{route('guardamodificapro')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_producto'))
<i> {{ $errors->first('id_producto')}}</i>
@endif     <br>
Clave: <input type='text' name='id_producto' value="{{$productos->id_producto}}" readonly='readonly'>
<br>

@if($errors->first('modelo'))
<i> {{ $errors->first('modelo')}}</i>
@endif     <br>
Modelo: <input type='text' name='modelo' value="{{$productos->modelo}}">
<br>

@if($errors->first('color'))
<i> {{ $errors->first('color') }}</i>
@endif     <br>
Color: <input type='text' name='color' value="{{$productos->color}}">
<br>

@if($errors->first('numero'))
<i> {{ $errors->first('numero') }}</i>
@endif     <br>
Numero: <input type='text' name='numero' value="{{$productos->numero}}">
<br>

@if($errors->first('estilo'))
<i> {{ $errors->first('estilo') }}</i>
@endif     <br>
Estilo: <input type='text' name='estilo' value="{{$productos->estilo}}">
<br>

@if($errors->first('precio'))
<i> {{ $errors->first('precio')}}</i>
@endif     <br>
Precio: <input type='text' name='precio' value="{{$productos->precio}}">
<br>

@if($errors->first('existencia'))
<i> {{ $errors->first('existencia')}}</i>
@endif     <br>
Existencia: <input type='text' name='existencia' value="{{$productos->existencia}}">

<br>
@if($errors->first('archivo'))
<i> {{ $errors->first('archivo')}}</i>
@endif  


<br>
<img src="{{asset('archivos/'.$productos->archivo)}}" height="100" width="100">
Seleccione foto: <input type='file' name='archivo'>
<br>
<br>
<input type='submit' name='Guardar'>

</form>
</body>
</html>