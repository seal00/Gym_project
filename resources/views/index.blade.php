@extends('layouts.app')

@section('content')
            <section id="slide1" class="homeslide">
            <div class="messages">
                @if ($errors->has('username'))
                <div class="error">
					<span>
						<strong>{{ $errors->first('username') }}</strong>
						<br>
                    </span>
                </div>
                @endif
                @if ($errors->has('password'))
                <div class="error">
					<span>
						<strong>{{ $errors->first('password') }}</strong>
						<br>
                    </span>
                </div>
				@endif
                @if(session('status'))
                    <div class="warning">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                @if(session('activated'))
                    <div class="success">
                        <strong>{{ session('activated') }}</strong>
                    </div>
                @endif
            </div>
            <section id="slide1">
            <div id="home">
                <div class="bodycontainer">
                    <div class="bodycontent">
                        <h2>Publicidade Inicial</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="slide2">
            <div id="serv">
                <div class="servcontainer">
                    <div class="servcontent">
                        <h2>Serviços disponiveis no ginásio</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="slide3">
            <div id="free">
                <div class="freecontainer">
                    <div class="freecontent">
                        <h2>Free trial</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="slide4">
            <div id="about">
                <div class="aboutcontainer">
                    <div class="aboutcontent">
                        <h2>Sobre o nosso ginásio</h2>
                    </div>
                </div>
            </div>
        </section>
@endsection