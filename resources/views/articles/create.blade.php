@extends('layout')

@section('content')
    <h1>New Article</h1>
    <hr>

    @include('errors.list')

    {!! Form::open(['action' => 'ArticlesController@store']) !!}
        @include('articles._form', ['submitButtonText' => 'Add article'])
    {!! Form::close() !!}
@stop