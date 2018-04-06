@extends('lay.app')

@section('content')
    <!-- Example row of columns -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2 class="display-3">Editer</h2>
        </div>
    </div>

    @include('posts.form')

    <hr>
@endsection
