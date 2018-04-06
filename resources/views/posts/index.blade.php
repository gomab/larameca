@extends('lay.app')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
        </div>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>

                <p><a class="btn btn-primary btn-sm" href="{{ route('news.edit', $post) }}" role="button">Editer »</a></p>
            </div>
        @endforeach
    </div>

    <hr>
@endsection
