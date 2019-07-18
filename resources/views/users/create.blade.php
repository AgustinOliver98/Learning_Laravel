@extends('layout')

@section('title','create new user')

@section('content')

    <form action="{{url('usuarios/crear')}}"  method="post">

        {!! csrf_field() !!}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <button type="submit">Crear usuario</button>
    </form>

@endsection