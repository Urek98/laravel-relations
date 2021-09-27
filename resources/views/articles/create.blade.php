@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="label-title">
            <label class="col-3 h2" for="title">Titolo</label>
            <input class="col-4" type="text" name="title" id="title" placeholder="Inserisci qui il titolo">
        </div>

        <div class="label-text">
            <label class="col-3 h2" for="article_text">Testo</label>
            <textarea class="input-text col-4 " type="text" name="article_text" id="article_text" rows="4" placeholder="Inserisci qui il testo">
            </textarea>
        </div>

        <div class="label-img">
            <label class="col-3 h2" for="article_img">Link img</label>
            <input class="col-4" type="text" name="article_img" id="article_img"  placeholder="Inserisci qui il link">
        </div>

        <div>
            <label class="col-3 h2" for="">Autore</label>
            <select id="author_id" name="author_id">
                <option selected>Seleziona autore</option>
                @foreach($authors as $author)
                <option value="{{$author->id}}">{{ $author->name }} {{ $author->surname }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex">
            <div class="col-3 h2">Tag</div>
            <div class="form-group col-4 d-flex flex-wrap">
                @foreach($tags as $tag)
                <div>
                    <input name="tag[]" type="checkbox" value="{{ $tag->id }}">
                    <label>{{$tag->name}}</label>
                </div>
                @endforeach

            </div>

        </div>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success" type="submit" value="Salva">
        </div>
    </form>

</div>



@endsection