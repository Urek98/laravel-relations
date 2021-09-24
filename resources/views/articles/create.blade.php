@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="label-text">
            <label for="article_text">Testo</label>
            <input class="input-username" type="text" name="article_text" id="article_text">
        </div>

        <div class="label-img">
            <label for="article_img">Link img</label>
            <input type="text" name="article_img" id="article_img">
        </div>

        <select id="author_id" name="author_id">
            <option selected>Autore</option>
            @foreach($authors as $author)
            <option value="{{$author->id}}">{{ $author->name }} {{ $author->surname }}</option>
            @endforeach
        </select>

        <strong>Tag</strong>
            <div class="form-group">
                @foreach($tags as $tag)
                <div>
                    <input name="tag[]" type="checkbox" value="{{ $tag->id }}">
                    <label>{{$tag->name}}</label>
                </div>
                @endforeach

            </div>

        <div>
            <input type="submit" value="Salva">
        </div>
    </form>

</div>



@endsection