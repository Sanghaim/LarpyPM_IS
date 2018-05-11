@extends('layouts.app')

@section('title', 'Kontaktní formulář')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Kontakt</h1>
            <hr>
            <form method="POST" action="{{ url('contact') }}" data-parsley-validate="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input class="form-control" name="email" id="email" type="text">
                </div>
                <div class="form-group">
                    <label name="email">Předmět:</label>
                    <input class="form-control" name="subject" id="subject" type="text">
                </div>
                <div class="form-group">
                    <label name="body">Zpráva:</label>
                    <textarea class="form-control" name="body" id="body" type="text"></textarea>
                </div>
                <input class="btn btn-success" type="submit" value="Poslat email">
            </form>
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.js') !!}
    @stop