@extends('lay.app')

@section('content')
    <!-- Example row of columns -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2 class="display-3">Ajouter un article</h2>
        </div>
    </div>

    <div class="row">
        {!! Form::open(['url' => route('news.store')]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Titre') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'URL') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Contenu') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
             <button class="btn btn-primary">Envoyer</button>
        {!! Form::close() !!}
    </div>

    <hr>
@endsection
