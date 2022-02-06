@extends('home')
@section('menu')
<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::open(['route'=>'news::create']) !!}
            <p>Тема</p>
            <div class="form-group">
                {!! Form::text('title',$news->title,['class'=>'form-control']) !!}
            </div>
            <p>Содержимое</p>
            <div class="form-group">
                {!! Form::textarea('content',$news->content,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit( 'Добавить новость',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
    </div>
</div>
@endsection
