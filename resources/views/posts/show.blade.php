@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            <p class="lead"> {{ $post->body }} </p>
        </div>

        <div class="col-md-4">
            <div class="card card-body bg-light">
                <dl class="row">
                    <dt class="col-sm-3">URL:</dt>
                                                    {{-- Jsou dva způsoby, jak generovalt URL, buď pomocí route nebo url a tu ručně nastavíme --}}
                    <dd class="col-sm-10"><a href="{{ route('blog.single', $post->slug) }}">{{ url('blog/' . $post->slug) }}</a></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-5">Created At:</dt>
                    <dd class="col-sm-6">{{ date('H:i j. n. Y', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-5">Edited At:</dt>
                    <dd class="col-sm-6">{{ date('H:i j. n. Y', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                        {{--<a href="#" class="btn btn-primary btn-block">Edit</a>--}}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {!! Html::linkRoute('posts.index', '<< See All Posts', null, ['class' => 'btn btn-block btn-light', 'style' => 'margin-top: 10px']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop