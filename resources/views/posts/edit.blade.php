@extends('layouts.app')

@section('title', '| Edit Blog Post')

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
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'data-parsley-validate' => '', 'method' => 'PUT']) !!}
    <div class="form-row">
        <div class="col-md-8 mb-3">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control form-control-lg', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

            {{ Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control']) }}

            {{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'js-example-basic-multiple', 'multiple' => 'multiple', 'style' => 'width: 100%']) }}


            {{ Form::label('body', 'Your blog:', ["class" => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body bg-light">
                    <dl class="dl-horizontal">
                        <dt>Created at:</dt>
                        <dd>{{ date('H:i j. n. Y', strtotime($post-> created_at))}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date('H:i j. n. Y', strtotime($post-> updated_at)) }}</dd>
                    </dl>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-6">
                            {{--{{ csrf_field() }}--}}
                            {{--{{ method_field('PUT') }}﻿--}}
                            {!! Form::submit('Save Changes', array('class'=> 'btn btn-success btn-block')) !!}
                            <!-- Laravel way to create an anchor element linked to a route -->
                            {{--{!! Html::linkRoute('posts.update', 'Save', array($post->id), array('class'=> 'btn btn-success btn-block')) !!}--}}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close()!!}
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
@stop