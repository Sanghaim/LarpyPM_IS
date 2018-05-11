@extends('layouts.app')

@section('title', '| Kategorie')

@section('stylesheets')
    {!! Html::style('css/parsley') !!}
@stop

@section('content')


    <div class="row">
        <div class="col-md-8">
            <h1>Kategorie</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Název</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
                    <h2>Nová kategorie</h2>
                    {{ Form::label('name', 'Název:') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                    {{ Form::submit('Vytvořit novou kategorii', ['class' => 'btn btn-success btn-block mt-2 ']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@stop