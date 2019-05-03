@extends ('layout')

@section ('title')
@section ('content')


        <h1>{{$title}}</h1>


            <ul>

                @foreach ($users as $user)

                    <li>{{$user}}</li>

                @endforeach
            </ul>


@endsection

