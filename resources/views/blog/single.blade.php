@extends('layouts.app')

@section('title', '| ' . htmlspecialchars($post->title) )﻿

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->body !!}</p>
            <hr>
            Posted in: {{ $post->category->name }}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8 offset-2">
            <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Komentáře</h3>
            @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="author-info">
                        <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . ".jpg?d=retro" }}" class="author-image">
                        <div class="author-name">
                            <h4>{{ $comment->name }}</h4>
                            <p class="author-time">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <div class="comment-content">
                        {{ $comment->body }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row mt-5">
        <div id="comment-form" class="col-md-8 offset-2">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', 'Jméno:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('comment', 'Komentář:') }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                    {{ Form::submit('Přidat komentář', ['class' => 'btn btn-success btn-block mt-2']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

@stop()
