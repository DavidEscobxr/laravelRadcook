@extends('layouts.plantilla')

@section('content')
    
<form action="procesar_formulario.php" method="POST">

    @csrf

    <label for="name">name:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="description">description:</label>
    <input type="text" id="description" name="descripction"><br><br>

    <input type="submit" value="Enviar">
  </form>