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
    
        <div>
            <input type="submit" value="Salva">
        </div>
    </form>

</div>



@endsection