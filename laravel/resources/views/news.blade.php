@extends('home')
@section('menu')
 <h1 style ="text-align:center">Новости</h1>
 @foreach($news as $item)
<ul>
    <a href="/{{$item->id_name}}">
        <li style ="font-size:32px">{{$item->title}}</li>
    </a>
</ul>
 @endforeach
@endsection
