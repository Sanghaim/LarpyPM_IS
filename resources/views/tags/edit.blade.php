@extends('main')

@section('title', '| Edit Tag')

@section('content')

    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}

    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}

    {{ Form::submit('Uložit změny', ['class' => 'mt-2 btn btn-success']) }}

    {{ Form::close() }}

@stop