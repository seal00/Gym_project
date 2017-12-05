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
<button onclick="topFunction()" id="btopo" title="homepagebutton">Top</button>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Madeira</span> Gym</h1>
        </div>
        <nav>
          <ul>
            <li id="login">
				<!--<a href="{{ url('/login') }}">Login</a>-->
				<a id="login-trigger" href="#" onClick="return false;">Login</a>
			
				<form id="login-form" role="form" method="POST" action="{{ url('/login') }}">
					{{ csrf_field() }}
					<label>
						<b>Username:</b>
					</label>

					<input type="text" placeholder="Username" id="username" type="username" class="form-control" name="username" required>
					<label>
						<b>Password:</b>
					</label>
					<input type="password" placeholder="Password" class="form-control" name="password" required>
					
					<input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : ''}}> Remember </br>
					<button type="submit" id="lbutton">LOGIN</button>

					<a id="create_account" href="{{ url('/register') }}">Register</a><b> - </b>
					<a id="forgot" href="{{ url('/password/reset') }}">Forgot your Password?</a>
					
				</form>
			</li>
			<li><a href="{{ url('/register') }}">Registo</a></li>
            <li><a href="#free">Free-Trial</a></li>
			<li><a href="#serv">Serviços</a></li>
			<li><a href="#home">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script>
		//Abre menu com click
		$(document).ready(function(){
			$('#login-trigger').click(function() {
				$(this).next('#login-form').slideToggle();
				$(this).toggleClass('active');
				

				if ($(this).hasClass('active')){
				$('#login-form').slideDown( "slow" );
				}
				else{
					$('#login-form').slideUp( "slow" );
				} 
			})
		});
		
		//Abre menu ao passar o rato
		/* $("#login-trigger").hover(function() {
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
		}); */
		
	</script>

	@yield('content')

</body>

</html>