@extends('layout')

@section('title','create new user')

@section('content')
    <h1>Editar Usuario</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{url("usuarios/{$user->id}")}}"  >
        {{method_field('PUT')}}
        {!! csrf_field() !!}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{old('name',$user->name)}}">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="email" value="{{old('email',$user->email)}}">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <button type="submit">Editar usuario</button>
    </form>

@endsection