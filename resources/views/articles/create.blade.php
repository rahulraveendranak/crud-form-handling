@extends("layouts.theme")

@section("content")

<form method="post" action="/articles">
    @csrf
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text" value="{{ old('title')}}" name="title" class="form-control">
        @error("title")
        <p style="color:red">{{$errors->first("title")}}</p>
        @enderror
        <!-- @if ($errors->has("title"))
        <p style="color:red">{{$errors->first("title")}}</p>
        @endif -->
    </div>
    <div class="form-group">
        <label for="">Article Body</label>
        <textarea class="form-control" name="body" rows="" cols="">{{ old('body')}}</textarea>
        @error("body")
        <p style="color:red">{{$errors->first("body")}}</p>
        @enderror
        <!-- @if ($errors->has("body"))
        <p style="color:red">{{$errors->first("body")}}</p>
        @endif -->
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>

@endsection