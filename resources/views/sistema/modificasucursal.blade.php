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

@if($errors->first('calle'))
<i> {{ $errors->first('calle')}}</i>
@endif     <br>
Calle: <input type='text' name='calle' value="{{$sucursal->calle}}" class="form-control">
<br>

@if($errors->first('numeroint'))
<i> {{ $errors->first('numeroint')}}</i>
@endif     <br>
Numero Interior: <input type='text' name='numeroint' value="{{$sucursal->numeroint}}" class="form-control">
<br>

@if($errors->first('numeroext'))
<i> {{ $errors->first('numeroext')}}</i>
@endif     <br>
Numero Exterior: <input type='text' name='numeroext' value="{{$sucursal->numeroext}}" class="form-control">
<br>

@if($errors->first('colonia'))
<i> {{ $errors->first('colonia')}}</i>
@endif     <br>
Colonia: <input type='text' name='colonia' value="{{$sucursal->colonia}}" class="form-control">
<br>

@if($errors->first('municipio'))
<i> {{ $errors->first('municipio')}}</i>
@endif     <br>
Municipio: <input type='text' name='municipio' value="{{$sucursal->municipio}}" class="form-control">
<br>
<div class="form-group">
@if($errors->first('estado'))
<i> {{ $errors->first('estado')}}</i>
@endif     <br>
<!-- Estado: <input type='text' name='estado' value="{{$sucursal->estado}}" class="form-control">
 -->


                <label>Estado</label>
                <select class="form-control" name='estado' >
                	<option value="$sucursal->id_sucursal">{{$sucursal->estado}}</option>
                  <option value='Aguascalientes'>Aguascalientes</option>
                  <option value='Baja California'>Baja California</option>
                  <option value='Baja California Sur'>Baja California Sur</option>
                  <option value='Campeche'>Campeche</option>
                  <option value='Coahuila de Zaragoza'>Coahuila de Zaragoza</option>
                  <option value='Colima'>Colima</option>
                  <option value='Ciudad de México'>Ciudad de México</option>
                  <option value='Chiapas'>Chiapas</option>
                  <option value='Chihuahua'>Chihuahua</option>
                  <option value='Durango'>Durango</option>                  
                  <option value='Guanajuato'>Guanajuato</option>
                  <option value='Guerrero'>Guerrero</option>
                  <option value='Hidalgo'>Hidalgo</option>
                  <option value='Jalisco'>Jalisco</option>
                  <option value='México'>México</option>
                  <option value='Michoacán'>Michoacán</option>
                  <option value='Morelos'>Morelos</option>
                  <option value='Nayarit'>Nayarit</option>
                  <option value='Nuevo León'>Nuevo León</option>
                  <option value='Oaxaca'>Oaxaca</option>
                  <option value='Puebla'>Puebla</option>
                  <option value='Querétaro'>Querétaro</option>
                  <option value='Quintana Roo'>Quintana Roo</option>
                  <option value='San Luis Potosí'>San Luis Potosí</option>
                  <option value='Sinaloa'>Sinaloa</option>
                  <option value='Sonora'>Sonora</option>
                  <option value='Tabasco'>Tabasco</option>
                  <option value='Tamaulipas'>Tamaulipas</option>
                  <option value='Tlaxcala'>Tlaxcala</option>
                  <option value='Veracruz'>Veracruz</option>
                  <option value='Yucatán'>Yucatán</option>
                  <option value='Zacatecas'>Zacatecas</option>
                </select>
              </div>
              <br>

@if($errors->first('codigopostal'))
<i> {{ $errors->first('codigopostal')}}</i>
@endif     <br>
Codigo Postal: <input type='text' name='codigopostal' value="{{$sucursal->codigopostal}}" class="form-control">
<br>


@if($errors->first('telefono'))
<i> {{ $errors->first('telefono') }}</i>
@endif     <br>
Telefono: <input type='text' name='telefono' value="{{$sucursal->telefono}}" class="form-control">
<br>
<br>
Activo: <input type='radio' name='activo' value='SI' checked>SI
<input type='radio' name='activo' value='NO'>NO
<br>
<input type='submit' class="btn btn-primary" name='Guardar'>

</form>
@stop