<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Perfil: {{Auth::user()->username}}</title>

  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
  

  
</head>

<body>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" />
    <h2>{{Auth::user()->username}}</h2>
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard"><span><a id="ref" href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-customers"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-users"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="#">Ver amigos</a></span></li>
  </ul>
</nav>

</body>
</html>