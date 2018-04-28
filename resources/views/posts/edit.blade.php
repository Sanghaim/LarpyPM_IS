@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css')  !!}

@section('content')
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'data-parsley-validate' => '', 'method' => 'PUT']) !!}
    <div class="form-row">
        <div class="col-md-8 mb-3">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control form-control-lg', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

            {{ Form::label('body', 'Your blog:', ["class" => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
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
    {!! Html::script('js/parsley.min.js') !!}
@stop