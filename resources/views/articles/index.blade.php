@extends("layouts.theme")

@section("content")

<a href="articles/create">Add a New Article</a>

<ul class="style1">
@foreach($articles as $article)
				<li class="first">
					<h3><a href ="/articles/{{$article->id}}">{{$article->title}}</a></h3>
					<p><a href="">{{$article->body}}</a></p>
                    <a class="btn btn-success" href="/articles/{{$article->id}}/edit">Edit</a>
				</li>
@endforeach				
			</ul>

@endsection