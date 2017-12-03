<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<link rel="stylesheet" href="{{ URL::asset('css/customHome.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script>
		window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
	</script>
</head>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Madeira</span> Gym</h1>
        </div>
        <nav id="navbar">
          <ul>
			<li><a href="/home">Home</a></li>
			<li><a href="/dadosPessoais">Dados Pessoais</a></li>
			<li><a href="/pagamentos">Pagamentos</a></li>
            <li><a href="/pt">Contate o PT</a></li>
			<li id="login-trigger"><a href="#">{{ Auth::user()->username }} </a>
				<div id="logout">
					<ul class="dropdown-menu" role="menu">
						<li id=logout>
							<a href="{{ url('/logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							<button type="submit" id="lobutton">logout</button>
							</form>
						</li>
					</ul>
				</div>
			</li>
          </ul>
        </nav>
      </div>
    </header>
<body>

	@yield('content')

</body>

</html>