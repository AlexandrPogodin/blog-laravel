@extends('layouts.app')

@section('content')

<h1>Write a new article!</h1>
<hr>

<form method="POST" action="URL::current()">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Название статьи</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input type="text" class="form-control" id="author" aria-describedby="emailHelp" placeholder="Author">
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Text</label>
            <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Name">
    </div>
          <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection
