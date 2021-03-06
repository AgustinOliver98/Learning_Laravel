@extends('layout')

@section('title','create new user')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{url('usuarios/crear')}}"  method="post">

        {!! csrf_field() !!}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="email" value="{{old('email')}}">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" >

        <button type="submit">Crear usuario</button>
    </form>

@endsection