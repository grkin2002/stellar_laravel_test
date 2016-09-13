@extends('home.layout')

@section('content')

<h1>Edit your Blog</h1>

<hr>

{!! Form::open(['route'=>['admin.blog.update', 'blog'=>$blog], 'method'=>'PUT']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', $blog->title, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Content:') !!}
		{!! Form::textarea('body', $blog->body,  ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::checkbox('active', $blog->active) !!} active or not
	</div>

	<div class="form-group">
		{!! Form::submit('Change', ['class'=>'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}


@stop