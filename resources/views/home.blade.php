@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @guest
        Wellcome to Audax, please login.
    @endguest
    @auth
        {{ __('You are logged in!') }}
    @endauth
</div>
@endsection
