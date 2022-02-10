@extends('layouts.app')
@section('content')
    <div class="justify-content-center row">
            @foreach($user as $item)
            @if(Auth::user()->is_admin  = 1)
                <h1 style="margin-top:40px" class="text-danger ">Name:</h1>
                <h3 >{{$item->name}}</h3>
                 <h1 class="text-danger ">Email:</h1>
                 <h3 style="margin-top:4px" >{{$item->email}}</h3>
                <a href="{{route('delete',$item->id)}}"><button class="btn-danger">Удалить пользователя</button></a>
                <a href="{{route('updateAdmin',$item->id)}}"><button class="btn-success">Редактировать</button></a>
            @endif
            @endforeach
        </div>
@endsection
