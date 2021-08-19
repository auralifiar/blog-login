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
                    <!-- <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a> -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth::check())
        @if(Auth::user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
        </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="{{url('creator')}}">Halaman creator</a>
        </li>

        @endif
    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
