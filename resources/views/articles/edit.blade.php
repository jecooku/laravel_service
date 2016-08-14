@extends('layout')

@section('content')
    <h1>Edit Article: {!! $article->title  !!}</h1>

    @include('errors.list')

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles._form', ['submitButtonText' => 'Edit article'])
    {!! Form::close() !!}

@stop