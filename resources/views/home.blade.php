@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                    <ul>

                        @if(auth()->user()->is_admin())
                        <a href="{{route('permissions')}}">
                            <li>Assign Permissions</li>
                        </a>
                        <a href="{{route('staff')}}">
                            <li>All Staff</li>
                        </a>
                        @endif

                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
