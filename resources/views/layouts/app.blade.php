<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script>
		window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
	</script>
</head>

<body>
	<button onclick="topFunction()" id="btopo" title="homepagebutton">Top</button>
	<div id="menu">
		<ul>
			<li id="login">
				<!--<a href="{{ url('/login') }}">Login</a>-->
				<a id="login-trigger" href="#">Login</a>
			
				<form id="login-form" role="form" method="POST" action="{{ url('/login') }}">
					{{ csrf_field() }}
					<label>
						<b>Username:</b>
					</label>

					<input type="text" placeholder="Username" id="username" type="username" class="form-control" name="username" required> @if ($errors->has('username'))
					<span>
						<strong>{{ $errors->first('username') }}</strong>
						<br>
					</span>
					@endif

					<label>
						<b>Password:</b>
					</label>
					<input type="password" placeholder="Password" class="form-control" name="password" required> @if ($errors->has('password'))
					<span>
						<strong>{{ $errors->first('password') }}</strong>
						<br>
					</span>
					@endif

					<button type="submit" id="lbutton">Login</button>

					<input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : ''}}> Remember </br>
					<span>Forgot
						<a id="forgot" href="{{ url('/password/reset') }}">Your Password?</a>
					</span>
					<span id="create">Not a member?
						<a id="create_account" href="{{ url('/register') }}">
							<br>Create an account free</a>
					</span>
				</form>
			</li>
			

			<li >
				<a id="ab" href="#about">About</a>
			</li>
			<li>
				<a href="#free">Free-Trial</a>
			</li>
			<li>
				<a href="#serv">Serviços</a>
			</li>
			<li>
				<a href="#home">Home</a>
			</li>
		</ul>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script>
		
		$("#login-trigger").hover(function() {
			$( "#login-form" ).slideDown( "slow" );
			
			$('#login-form').hover(function(){
				$(this).addClass('active');
			}, function(){
				$(this).removeClass('active');
			})
			
			$('#login-form').mouseenter(function() {
				$('#login-form').show();  
				}).mouseleave(function() {      
					if(!$('#login-form').hasClass('active') ){
						$('#login-form').slideUp( "slow" );
					}
			});
			
		});
		
		$("#ab").hover(function() {
			$( "#login-form" ).slideUp( "slow" );
		});
		
	</script>

	@yield('content')

</body>

</html>