@extends('layouts.app')

@section('content')

<div class="container">
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Testo</th>
        <th scope="col">Immagine</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->article_text}}</td>
                <td><img src="{{$article->article_img}}" alt="picture of {{$article->title}}" /></td>
                <td>
                <a href="{{ route('articles.show', ['article'=>$article->id]) }}">Maggiori info</a>
                </td>

            </tr>
        @endforeach
    </tbody>
    </table>
</div>


@endsection