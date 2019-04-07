@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Articles</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $article->name }}</li>
        </ol>
      </nav>
<article>
<h1>{{ $article->name }}</h1>
<h6>Posted by <b>{{ $article->author }}</b></h6>
<h6>{{ date("d.m.Y", strtotime($article->updated_at)) }}</h6>
<br>
<p>{{ $article->text }}</p>
</article>
@endsection
