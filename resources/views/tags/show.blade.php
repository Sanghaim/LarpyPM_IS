@extends('main')

@section('title', "| " . htmlspecialchars($tag->name) . "Tag")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $tag->name }} -> <small>{{ $tag->posts()->count() }} posty</small></h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary float-right mt-2 mb-2 btn-block" href="{{ route('tags.edit', $tag->id) }}">Edit</a>
        </div>
        <div class="col-md-2">
            {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                {{ Form::submit('Smazat', ['class' => 'btn btn-danger btn-block mt-2 mb-2']) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tag->posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>
                            @foreach($post->tags as $tag)
                                <span class="badge badge-secondary">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                        <td><a class="btn btn-sm btn-light" href="{{ route('posts.show', $post->id) }}">View</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <table class="table">

    </table>


@stop