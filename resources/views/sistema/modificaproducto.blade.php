@extends('sistema.principal')
    <title>Productos</title>
@section('contenido')
	<h1>Modifica Productos</h1>

<form action = "{{route('guardamodificapro')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_producto'))
<i> {{ $errors->first('id_producto')}}</i>
@endif     <br>
Clave: <input type='text' name='id_producto' value="{{$productos->id_producto}}" readonly='readonly' class="form-control">
<br>

@if($errors->first('modelo'))
<i> {{ $errors->first('modelo')}}</i>
@endif     <br>
Modelo: <input type='text' name='modelo' value="{{$productos->modelo}}" class="form-control">
<br>

@if($errors->first('color'))
<i> {{ $errors->first('color') }}</i>
@endif     <br>
Color: <input type='text' name='color' value="{{$productos->color}}" class="form-control">
<br>

@if($errors->first('numero'))
<i> {{ $errors->first('numero') }}</i>
@endif     <br>
Numero: <input type='number' name='numero' value="{{$productos->numero}}" class="form-control">
<br>

@if($errors->first('estilo'))
<i> {{ $errors->first('estilo') }}</i>
@endif     <br>
Estilo: <input type='text' name='estilo' value="{{$productos->estilo}}" class="form-control">
<br>

@if($errors->first('precio'))
<i> {{ $errors->first('precio')}}</i>
@endif     <br>
Precio:
       <div class="form-group input-group">

                <span class="input-group-addon">$</span>
                 <input type='number' min="0.00" max="10000.00" step="0.01" name='precio' class="form-control" value="{{$productos->precio}}">
              </div>
<br>


@if($errors->first('existencia'))
<i> {{ $errors->first('existencia')}}</i>
@endif     <br>
Existencia: <input type='text' name='existencia' value="{{$productos->existencia}}" class="form-control">

<br>
@if($errors->first('archivo'))
<i> {{ $errors->first('archivo')}}</i>
@endif  


<br align="center">
<img src="{{asset('archivos/'.$productos->archivo)}}" height="100" width="100">
<br>
<span class="btn btn-primary btn-file">
Seleccione foto <input type='file' align="center" name='archivo'>
</span>
<br>
<br>
<input type='submit' class="btn btn-primary"name='Guardar'>

</form>
@stop