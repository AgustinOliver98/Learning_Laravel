@extends ('layout')

@section ('title', "{$users->name}")

@section ('content')
        <h1> Usuario #{{$users->id}}</h1>

       <p>Nombre del Usuario: {{$users->name}}</p>
        <p>Email de {{$users->name}}: {{$users->email}}</p>

@endsection