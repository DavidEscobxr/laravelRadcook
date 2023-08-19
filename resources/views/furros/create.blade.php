@extends('layouts.plantilla')
@section('cuerpo')

<h1>crea tu furro con la 2502319</h1> 
<form action="{{route('furros.store')}}" method="POST">

    @csrf

    <label for="name">name:</label>
    <input type="text" id="nombre" name="name"><br><br>

    <label for="telefono">telefono:</label>
    <input type="number" id="telefono" name="telefono"><br><br>

    <input type="submit" value="Enviar">
  </form>
@endsection