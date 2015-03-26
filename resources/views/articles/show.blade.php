@extends('app')

@section('content')

	<div class="container">

		<h1> {{  $article->title  }} </h1>

		<article>
			
			{{  $article->body  }}

		</article>
	</div>
	
@stop