@extends('layouts.app')

@section('content')

<body>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
  <h2>{{Auth::user()->username}}</h2><br>
    <img src="/uploads/avatars/{{Auth::user()->avatar}}" />
    <form enctype="multipart/form-data" action="/home/{{Auth::user()->username}}" method="post">
      <label id="upload_i" for="form-file">Alterar a imagem de perfil</label>
      <input type="file" name="avatar" id="form-file" class="hidden" />
      <!-- <input type="file" name="avatar"> -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" value="Submeter">
    </form>
  </header>
	<ul id="ulperfil">
    <li tabindex="0" class="icon-dashboard"><span><a id="ref" href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-customers"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-users"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="#">Ver amigos</a></span></li>
  </ul>
</nav>

@endsection