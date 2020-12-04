@extends("layouts.theme")

@section("content")

<form method="post" action="/articles/{{$article->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text" name="title" value="{{$article->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Article Body</label>
        <textarea class="form-control" name="body" rows="" cols="">{{$article->body}}</textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>

@endsection