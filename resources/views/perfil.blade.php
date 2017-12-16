@extends('layouts.appperfil')

@section('content2')


@if(session('dados'))
                    <div class="success">
                        <strong>{{ session('dados') }}</strong>
                    </div>
                @endif
                @if(session('morada'))
                    <div class="success">
                        <strong>{{ session('morada') }}</strong>
                    </div>
                @endif
                @if(session('email'))
                    <div class="success">
                        <strong>{{ session('email') }}</strong>
                    </div>
                @endif
                @if(session('email_error'))
                    <div class="error">
                        <strong>{{ session('email_error') }}</strong>
                    </div>
                @endif
                @if(session('pass'))
                    <div class="success">
                        <strong>{{ session('pass') }}</strong>
                    </div>
                @endif
                @if(session('pass_error'))
                    <div class="error">
                        <strong>{{ session('pass_error') }}</strong>
                    </div>
                @endif
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
      <h5>---- {{$user->email}} ----</h5>

      <br><hr><br>
      <p><label>Contacto</label> {{$pessoa->contacto}}</p>
      <p><label>Data de Nascimento</label> {{$pessoa->nascimento}}</p>
      <p><label>NIF</label> {{$pessoa->nif}}</p>
      <p><label>Sexo</label> {{$pessoa->sexo}}</p>
      <p><label>Peso</label> {{$pessoa->peso}}</p>
      <p><label>Altura</label> {{$pessoa->altura}}</p>

      @if (!empty($morada))
        <p><label>Morada</label> {{$morada->rua}}</p>
      @endif
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