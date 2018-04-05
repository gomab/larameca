@extends('layouts.app')


@section('content')

    <div class="container">
        <p>
            <a class="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id]) }}">
                {{ route('link.show', $link) }}
            </a>
        </p>
    </div>
@endsection