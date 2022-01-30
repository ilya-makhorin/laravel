@include('home')
@section('menu')
@foreach($newsworld as $item)
   <h1 style ="text-align:center">{{$item->title}}</h1>
    <p style ="font-size:22px">{{$item->content}}</p>
     @endforeach
@endsection
