@extends('layouts.app')

@section('content')

<body>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
    <img src="/uploads/avatars/{{Auth::user()->avatar}}">
    <br><a href="/home/{{Auth::user()->username}}"><h2>{{Auth::user()->username}}</h2></a>
  </header>
	<ul id="ulperfil">
    <?php
    use App\Pessoa;
    use App\Morada;
    $pessoa = Pessoa::where(['user_id'=>Auth::user()->id])->first();
    $morada = Morada::where(['id'=>($pessoa->morada_id)])->first();
    if (!empty ($pessoa->morada_id)) {
      echo "<li tabindex='0' class='icon-dashboard'><span><a id='ref' href='/home/".Auth::user()->username."/addMorada'>Alterar Morada</a></span></li>";
    }else{
      echo "<li tabindex='0' class='icon-dashboard'><span><a id='ref' href='/home/".Auth::user()->username."/addMorada'>Adicionar Morada</a></span></li>";
    }
    
    if (!empty ($pessoa->contacto)) {
      echo "<li tabindex='0' class='icon-customers'><span><a id='ref' href='/home/".Auth::user()->username."/edit'>Alterar dados Pessoais</a></span></li>";
    }else{
      echo "<li tabindex='0' class='icon-customers'><span><a id='ref' href='/home/".Auth::user()->username."/edit'>Adicionar dados Pessoais</a></span></li>";
      }?>

    <!-- <li tabindex="0" class="icon-dashboard"><span><a id="ref" href="/home/{{Auth::user()->username}}/addMorada">Adicionar Morada</a></span></li> -->
    <!-- <li tabindex="0" class="icon-customers"><span><a id="ref" href="/home/{{Auth::user()->username}}/edit">Alterar dados Pessoais</a></span></li> -->
    <li tabindex="0" class="icon-users"><span><a href="#">Ver amigos</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="#">Ver amigos</a></span></li>
  </ul>
</nav>

@yield('content2')