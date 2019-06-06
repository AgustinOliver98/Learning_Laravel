@extends ('layout')

@section ('title', "{$users->name}")

@section('content')
<div class="card" style="width: 18rem;">
    <img src="https://img.depor.com/files/article_main/uploads/2019/06/05/5cf84dbcb18c8.jpeg" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">Usuarios</h5>
        <p class="card-text">{{$users->name}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Correo: {{$users->email}}</li>

    </ul>
</div>
    <a href="{{ route('user.index') }}"> regresar</a>
@endsection