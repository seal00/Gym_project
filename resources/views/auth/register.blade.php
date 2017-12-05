@extends('layouts.app')

@section('content')
        @if(session('status'))
        <div class="alert alert-sucess">
            {{ session('status') }}
        </div>
        @endif
        <div class="loginbox">
        <form role="form" method="POST" action="{{ url('/register') }}">

            {{ csrf_field() }}
            <label>
                <b>Username</b>
            </label>
            <input type="text" placeholder="Username" id="username" type="username" class="form-control" name="username" required>
            @if ($errors->has('username'))
            <span>
                <strong>{{ $errors->first('username') }}</strong>
                <br>
            </span>
            @endif

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
                <b>E-Mail Address</b>
            </label>
            <input type="text" placeholder="email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Password</b>
            </label>
            <input type="password" placeholder="Password" class="form-control" name="password" required>
            @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
                <br>
            </span>
            @endif

            <label>
                <b>Confirm Password</b>
            </label>
            <input id="password-confirm" type="password" placeholder="Password" class="form-control" name="password_confirmation" required>
            

            <button type="submit" id="lbutton">Register</button>

        </form>
        </div>
@endsection
