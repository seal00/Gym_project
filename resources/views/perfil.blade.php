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
    <li tabindex="0" class="icon-dashboard"><span><a id="ref" href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-customers"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-users"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="#">Ver amigos</a></span></li>
  </ul>
</nav>

<div class="profile_d">
<img id="img_prof" src="/uploads/avatars/{{Auth::user()->avatar}}" alt="Avatar" style="height:100%">
  <div class="prof_cont">
    <h3>{{$pessoa->name}}
      @if($user->isAdmin)
        <b>(Administrador)</b>
      @elseif($user->isInst)
        <b>(Instrutor)</b>
      @else
        <b>(Cliente)</b>
      @endif
      </h3>
      <br><hr><br>
      <p><label>Contacto</label> {{$pessoa->contacto}}</p>
      <p><label>Data de Nascimento</label> {{$pessoa->nascimento}}</p>
      <p><label>NIF</label> {{$pessoa->nif}}</p>
      <p><label>Sexo</label> {{$pessoa->sexo}}</p>
      <p><label>Peso</label> {{$pessoa->peso}}</p>
      <p><label>Altura</label> {{$pessoa->altura}}</p>
      <form id="change_img" enctype="multipart/form-data" action="/home/{{Auth::user()->username}}" method="post">
        <label id="upload_i" for="form-file">Alterar a imagem de perfil</label>
        <input type="file" name="avatar" id="form-file" class="hidden" />
        <!-- <input type="file" name="avatar"> -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Submeter">
      </form>
  </div>
</div>



@endsection