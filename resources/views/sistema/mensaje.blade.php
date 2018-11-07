@extends('sistema.principal')


@section('contenido')
<H1>{{$proceso}}</h1>
<br>
<b>{{$mensaje}}</b>
<br>
<a href="{{URL::action('principalc@index')}}">Index</a>
@stop