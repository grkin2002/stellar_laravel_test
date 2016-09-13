@extends('home.layout')

@section('content')
<div class="container-fluid">
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-md-10 col-md-offset-1">
								
								<label class="pull-right">
										<input type="checkbox" name="remember"> Remember Me
								</label>
								
								<button type="submit" class="col-md-4 btn btn-primary">
									Login 
								</button>
							</div>
						</div>


					</form>
				</div>
				<div class="panel-footer">
					<p>User: test@email.com &nbsp&nbsp Pass: 123456</p>
					<p>User: stellar@gmail.com &nbsp;&nbsp; Pass: 123456</p>
					<p>User: admin@gmail.com &nbsp;&nbsp; Pass: 123456</p>
				</div>
				 
			</div>
		</div>
	</div>
</div>
@endsection
