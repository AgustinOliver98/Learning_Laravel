@extends ('layout')

@section ('title')
@section ('content')


               <ul class="list-group ">
                   <li class="list-group-item active">{{$title}}</li>
                   @foreach ($users as $user)

                       <li class="list-group-item"><a href="{{route('user.show', ['id'=>$user])}}">{{$user->name}}</a> | <a href="{{route('user.edit',$user)}}">Editar</a></li>
                   @endforeach

               </ul>


@endsection

