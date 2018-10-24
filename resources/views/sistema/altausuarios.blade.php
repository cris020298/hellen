<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Alta Usuarios</h1>

<form action = "{{route('guardausuarios')}}" method="POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id'))
<i> {{ $errors->first('id')}}</i>
@endif     <br>
Clave: <input type='text' name='id' value="{{$id_usu}}" readonly='readonly'>
<br>

@if($errors->first('name'))
<i> {{ $errors->first('name')}}</i>
@endif     <br>
Nombre: <input type='text' name='name' value="{{old('name')}}">
<br>


@if($errors->first('email'))
<i> {{ $errors->first('email')}}</i>
@endif     <br>
Correo: <input type='email' name='email' value="{{old('email')}}">
<br>

@if($errors->first('password'))
<i> {{ $errors->first('password')}}</i>
@endif     <br>
Contraseña: <input type='text' name='password' value="{{old('password')}}">
<br>

<br>
<input type='submit' name='Guardar'>

</form>
</body>
</html>