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


    <form action="{{url('usuarios/crear')}}"  method="post">

        {!! csrf_field() !!}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{old('name',$user->name)}}">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="email" value="{{old('email',$user->email)}}">
        <button type="submit">Editar usuario</button>
    </form>

@endsection