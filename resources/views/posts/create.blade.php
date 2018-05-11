@extends('layouts.app')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css')  !!}
    {!! Html::style('css/select2.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qalhzx87vvytca1kq41kr06sl01m2m2qetd6i4o9npahwfuk"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link image',
            menubar: false
        });
    </script>
@stop

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>New Article</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control form-control-lg', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

            {{ Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{Form::label('tags[]', 'Tags:', ['class' => 'form-spacing-top'])}}
            <br>
            <select class="js-example-basic-multiple" style="width: 100%" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <br>


            {{ Form::label('body', 'Post Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block',
                                                 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@stop()
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
@stop