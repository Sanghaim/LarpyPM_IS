@extends('layouts.app')

@section('title', '| Tagy')

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@stop

@section('content')


    <div class="row">
        <div class="col-md-8">
            <h1>Tagy</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Název</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    {!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
                    <h2>Nový tag</h2>
                    {{ Form::label('name', 'Název:') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                    {{ Form::submit('Vytvořit nový tag', ['class' => 'btn btn-success btn-block mt-2 ']) }}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@stop