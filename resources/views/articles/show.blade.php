@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>#{{$article->id}}</h1>
            <h2>Titolo: {{$article->title}}</h2>
            <p>{{$article->article_text}}</p>

            @foreach($article->tag as $tag)
            <span class="badge badge-secondary">{{$tag->name}}</span>
            @endforeach
            <div>
                <a href="{{ route('articles.index') }}">Torna Indietro</a>
            </div>
        </div>
        <div class="col">
            <img src="{{$article->article_img}}" alt="picture of {{$article->title}}" />
            <div>Creato il: {{$article->created_at}}</div>
        </div>
    </div>
</div>


@endsection