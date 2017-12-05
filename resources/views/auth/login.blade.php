@extends('layouts.app')

@section('content')

                @if(session('status'))
                    <div class="alert alert-sucess">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="loginbox">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <label>
                            <b>Username:</b>
                        </label>

                        <input type="text" placeholder="Username" id="username" type="username" class="form-control" name="username" required>
                        @if ($errors->has('username'))
                        <span>
                            <strong>{{ $errors->first('username') }}</strong>
                            <br>
                        </span>
                        @endif

                        <label>
                            <b>Password:</b>
                        </label>
                        <input type="password" placeholder="Password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password') }}</strong>
                            <br>
                        </span>
                        @endif

                        <button type="submit" id="lbutton">LOGIN</button>

                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : ''}}> Remember </br>
                        <span><a id="create_account" href="{{ url('/register') }}">REGISTER</a></span>
                        <span><a id="forgot" href="{{ url('/password/reset') }}">Forgot your Password?</a></span>
                    </form>
                </div>
@endsection
