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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
	</script>
</head>
<button onclick="topFunction()" id="btopo" title="homepagebutton">Top</button>
<header class="header">
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Madeira</span> Gym</h1>
		</div>
		@if (Auth::guest())
        <nav class="navclass">
          <ul class="ulteste">
		  	<li id="login">
            <!-- <li id="login"> -->
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
			<li class="liteste"><a href="{{ url('/register') }}">Registo</a></li>
            <li class="liteste"><a href="#free">Free-Trial</a></li>
			<li class="liteste"><a href="#serv">Serviços</a></li>
			<li class="liteste"><a href="#home">Home</a></li>
          </ul>
		</nav>
		@else
		<ul class="ullogout">
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">
				<img id="log-teste" src="/uploads/avatars/{{ Auth::user()->avatar }}">
				{{ Auth::user()->username }}
				</a>
				<div class="dropdown-content">
					<a onclick="load_main_content()" href="/home/{{Auth::user()->username}}" id="jtest" name="/home/{{Auth::user()->username}}/perfil">Ver Perfil</a>
					<a href="#">Ver amigos</a>
					<a href="#">Ver pagamentos</a>
					<a href="#">Ver horários</a>
					<a href="#">inscrever em aulas</a>
					<a href="#">Definições Pessoais</a>
					<a href="{{ url('/logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								Logout
					</a>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							<button type="submit" id="lobutton">logout</button>
					</form>
				</div>
			</li>
			<li class="liteste"><a href="/dadosPessoais">Dados Pessoais</a></li>
			<li class="liteste"><a href="/pagamentos">Pagamentos</a></li>
			<li class="liteste"><a href="/pt">Contate o PT</a></li>
			<li class="liteste"><a href="/services">Serviços</a></li>
			<li class="liteste"><a href="/home">Home</a></li>
		  </ul>
		  @endif

      </div>
    </header>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>

	/*$(document).ready(function(){
		$('#jteste').click(function(){
			$('#contenttest').load('/main_content/');
		});
	});*/

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

		//efeito de slowdown quando o utilizador volta ao topo
		/*$(window).scroll(function(){
			$("header").stop().animate({"marginTop": ($(window).scrollTop()) + "px"}, "slow" );
		  });*/


		  (function($) {
			  var element = $('.header'),
			  originalY = element.offset().top;
			  
			  // Space between element and top of screen (when scrolling)
			  var topMargin = 0;
			  
			  // Should probably be set in CSS; but here just for emphasis
			  element.css('position', 'relative');
			  
			  $(window).on('scroll', function(event) {
				  var scrollTop = $(window).scrollTop();
				  
				  element.stop(false, false).animate({
					  top: scrollTop < originalY
					  ? 0
					: scrollTop - originalY + topMargin
				}, 100);
			});
		})(jQuery);
		
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