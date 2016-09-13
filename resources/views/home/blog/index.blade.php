@extends('home.layout')

@section('content')
	@foreach($blogs as $blog)
        <div class="bs-callout bs-callout-danger">
            <div class="row">
                {!! Html::linkRoute('BlogShow', str_limit($blog->title, $limit=100, $end='...'),
                       ['bid'=>$blog->id], ['class'=>'post-title']) !!}
                
                &nbsp;&nbsp;
                <span class="glyphicon glyphicon-time"></span>&nbsp{{ $blog->created_at->diffForHumans() }}
                &nbsp;&nbsp;
                <span class="glyphicon glyphicon-user"></span>
                posted by {{$blog->user->name}}
                &nbsp;&nbsp;
                @if(Auth::check() && Auth::user()->name == 'admin')
                <!-- edit button -->
                <span class="glyphicon glyphicon-edit"></span>
                {!! Html::linkRoute('admin.blog.edit', 'edit', ['bid'=>$blog->id], ['class'=>'bg-info']) !!}

                <!-- delete button -->
                <span class="pull-right">
                    {!! Form::open(['route'=>['admin.blog.destroy', 'bid'=>$blog->id], 'method'=>'DELETE']) !!}
                        {!! Form::submit('delete', ['class'=>'bg-info']) !!}
                    {!! Form::close() !!}
                </span>
                @endif

                <div class="post-content">
                    {{str_limit($blog->body, $limit=500, $end='...more')}}
                </div>
             
            </div>

		</div>
	@endforeach
	<br><br>
@stop