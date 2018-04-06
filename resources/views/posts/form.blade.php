<?php
    if($post->id){
        $options = ['method' => 'put', 'url' => action('PostsController@update', $post)];
    }else{
        $options = ['method' => 'posts', 'url' => action('PostsController@store')];
    }
?>


<div class="row">
    {!! Form::model($post, $options) !!}
    <div class="form-group">
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'URL') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categorie') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags_list[]', 'Tags') !!}
        {!! Form::select('tags_list[]', App\Tag::pluck('name', 'id') , null, ['class' => 'form-control', 'multiple' => true]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenu') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label>
            {!! Form::checkbox('online',1, null) !!}
            En ligne?
        </label>
    </div>
    <button class="btn btn-primary">Envoyer</button>
    {!! Form::close() !!}
</div>