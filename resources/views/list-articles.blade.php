@extends("layouts.theme")

@section("post")
<ul class="style1">
@foreach($articles as $article)
				<li class="first">
					<h3>{{$article->title}}</h3>
					<p><a href="#">{{$article->body}}</a></p>
				</li>
@endforeach				
			</ul>
@endsection