@extends('layouts.appOLD')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::user()->isAdmin())
                        You are logged in as ADMIN!

                    @elseif (Auth::user()->isInst())
                        You are logged in as instructor!
                    
                    @else
                        You are logged in!
                
                    @endif
                    
                   {{ Auth::user()->username }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
