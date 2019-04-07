@extends('layouts.app')

@section('content')

    @foreach ($articles as $article)
    <article>
    {{-- <h1>{{ $article->name }}  <a href="{{ action('ArticlesController@article', [$article->id]) }}">{{ $article->name }}</a></h1> --}}
    <h1>{{ $article->name }}</h1>
        <h6>Posted by <b>{{ $article->author }}</b></h6>
        <h6>{{ date("d.m.Y", strtotime($article->updated_at)) }}</h6>
        <br>
        <p>"{{ mb_strimwidth($article->text, 0, 300, "...") }}"</p>
        <a class="btn btn-outline-primary" href="{{ action('ArticlesController@article', [$article->id]) }}" role="button">Read more</a>
        <hr>
    </article>
    @endforeach
    <div class="div">{{ $articles->links() }}</div>


@endsection
