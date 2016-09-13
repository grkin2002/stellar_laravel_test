@extends('home.layout')

@section('content')
<h1>Create your blog</h1>
<hr>

{!! Form::open(['route'=>['admin.blog.store']]) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Content:') !!}
		{!! Form::textarea('body', null,  ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::checkbox('active') !!} active or not
	</div>

	<div class="form-group">
		{!! Form::submit('Post', ['class'=>'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

@stop