@extends('home')
@section('menu')
    <div class="row justify-content-center">
        <div class="col-md-6">
            @foreach($n as $item)
            <h2 style="margin-top:40px" class="text-center">{{$item->title}}</h2>
              <a href="{{route('news::deleteNews',$item->id)}}"><button class="btn-danger">Delete</button></a>
                <a href="{{route('news::updateNews',$item->id)}}"><button class="btn-success">Update</button></a>
            @endforeach
                <div style="margin-top: 40px" class="form-group">
                    <a href="/create"><button class="btn-success form-control">Create news</button></a>
                </div>
        </div>
    </div>
@endsection
