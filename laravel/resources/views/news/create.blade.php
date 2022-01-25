@extends('home')
@section('menu')
<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::open(['route'=>'news::create']) !!}
            <p>Заголовок</p>
            <div class="form-group">
                {!! Form::text('title','',['class'=>'form-control']) !!}
            </div>
            <p>Содержимое</p>
            <div class="form-group">
                {!! Form::textarea('content','',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit( 'send',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
    </div>
</div>
@endsection
