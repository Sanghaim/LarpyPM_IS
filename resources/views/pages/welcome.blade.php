@extends('layouts.app')

@section('title', 'Domovská stránka')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Vítejte v aplikaci skupiny Post Mortem!</h1>
                <p class="lead">Aplikace je ve vývoji. Finální verze bude použita pro organizaci LARPových akcí.</p>
                <hr class="my-4">
                <p>Ocením veškerou zpětnou vazbu, rady a připomínky ohledně podoby aplikace.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Poslední příspěvek</a>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p> {{ str_limit($post->body, $limit = 300, $end = '...') }}</p>
                    <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-link">Číst dále</a>
                </div>

                <hr>

            @endforeach
        </div>

        <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@stop