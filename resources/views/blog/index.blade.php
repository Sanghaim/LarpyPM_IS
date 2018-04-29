@extends('layouts.app')

@section('title', '| All blogs')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Blogs</h1>
        </div>

        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th> {{ $post->id }}</th>
                        <td> {{ $post->title }}</td>
                        <td> {{ str_limit($post->body, $limit = 50, $end = '...') }}</td>
                        <td> {{ date('j. n. Y', strtotime($post->created_at)) }}</td>
                        {{--$post->created_at->diffForHumans()--}}
                        <td>
                            <a class="btn btn-light" href='/blog/{{ $post->slug }}'>View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@stop