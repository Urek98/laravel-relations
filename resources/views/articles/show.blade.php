@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>#{{$article->id}}</h1>
            <div>Titolo: {{$article->title}}</div>
            <p>{{$article->article_text}}</p>
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