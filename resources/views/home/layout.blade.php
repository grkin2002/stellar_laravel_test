<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stellar test blog</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/patch.css">

</head>
<body>
    <div class="container">
    	<div class="menu">
	      	<ul class="nav navbar-nav ">
				<li><a href="/">Home</a></li>	
				<li><a href="/admin/blog/create">Write</a></li>			
				<li class="pull-right">
				@if(Auth::check() )				
					<a href="/auth/logout" class="" >Welcome  {{ Auth::user()->name }} &nbsp;|&nbsp;Logout</a>
				@else
					<a href="/auth/login" class="" >Login</a>

				@endif
				</li>
			</ul>

		</div>
	</div>
	<div class="container">
		@yield('content')
	</div>
	<div class="footer">
		<p>this is a footer</p>
	</div>
</body>
</html>