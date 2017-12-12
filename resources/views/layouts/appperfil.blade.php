@extends('layouts.app')

@section('content')

<body>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
    <img src="/uploads/avatars/{{Auth::user()->avatar}}">
    <br><h2>{{Auth::user()->username}}</h2>
  </header>
	<ul id="ulperfil">
    <li tabindex="0" class="icon-dashboard"><span><a id="ref" href="/home/{{Auth::user()->username}}/edit">Alterar dados Pessoais</a></span></li>
    <li tabindex="0" class="icon-customers"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-users"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="#">Ver amigos</a></span></li>
  </ul>
</nav>

@yield('content2')