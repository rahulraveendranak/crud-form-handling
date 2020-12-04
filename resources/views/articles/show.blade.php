@extends("layouts.theme")

@section("content")

<a href="/articles">View all Articles</a>

<h1>{{$article->title}}</h1>

<p>
    {{$article->body}}
</p>

<form method="post" action="/articles/{{$article->id}}">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('are you sure.?');" class = "btn btn-danger">Delete Article</button>
</form>

@endsection