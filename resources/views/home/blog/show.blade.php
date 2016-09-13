@extends('home.layout')

@section('content')
	<div class="wrap">
		<div class="post-topheader">
		<p>{!! Html::linkRoute('BlogList', 'Home', []) !!}
        >Blog Body
        </p>
        <h4>{{ $blog->title}}</h4>
        <p>
        	<span class="glyphicon glyphicon-user"></span> posted by {{ $blog->user->name}} &nbsp;&nbsp;
        	<span class="glyphicon glyphicon-time"></span> {{ $blog->created_at->diffForHumans()}}
        </p>	
		</div>
		<br>
		<div class="post-content">
			<p>{{ $blog->body }}</p>
		</div>


	</div>
@stop