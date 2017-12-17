<div class="loginbox">
        <form role="form" method="POST" action="/home/{{Auth::user()->username}}/edit">

            {{ csrf_field() }}

            <label>
                <b>Name</b>
            </label>
            <input type="text" placeholder="Name" id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span>
                <strong>{{ $errors->first('name') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Contacto</b>
            </label>
            <input type="text" placeholder="Contacto" id="contacto" type="contacto" class="form-control" name="contacto" value="{{ old('contacto') }}" required autofocus>
            @if ($errors->has('contacto'))
            <span>
                <strong>{{ $errors->first('contacto') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Data de Nascimento</b>
            </label>
            <input type="text" placeholder="Data de Nascimento" id="nascimento" type="nascimento" class="form-control" name="nascimento" value="{{ old('nascimento') }}" required autofocus>
            @if ($errors->has('nascimento'))
            <span>
                <strong>{{ $errors->first('nascimento') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>NIF</b>
            </label>
            <input type="text" placeholder="Número de Identificação Fiscal" id="nif" type="nif" class="form-control" name="nif" value="{{ old('nif') }}" required autofocus>
            @if ($errors->has('nif'))
            <span>
                <strong>{{ $errors->first('nif') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Sexo</b><br>
            </label>
            <p><input type="radio" name="sexo" id="sexo" type="sexo" class="form-control" value="Feminino"> Feminino <br></p>
            <p><input type="radio" name="sexo" id="sexo" type="sexo" class="form-control" value="Masculino"checked> Masculino <br></p>
            @if ($errors->has('sexo'))
            <span>
                <strong>{{ $errors->first('sexo') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Peso</b>
            </label>
            <input type="text" placeholder="Peso" id="peso" type="peso" class="form-control" name="peso" value="{{ old('peso') }}" required autofocus>
            @if ($errors->has('peso'))
            <span>
                <strong>{{ $errors->first('peso') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Altura</b>
            </label>
            <input type="text" placeholder="Altura" id="altura" type="altura" class="form-control" name="altura" value="{{ old('altura') }}" required autofocus>
            @if ($errors->has('altura'))
            <span>
                <strong>{{ $errors->first('altura') }}</strong>
                <br>
            </span>
            @endif

            <button type="submit" id="lbutton">Alterar Dados</button>

        </form>
        </div>