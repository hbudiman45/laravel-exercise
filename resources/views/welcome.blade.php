@extends('layout/layout')

@section('content')
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="jumbotron">
                <div class="text-center">
                    <h1>Home Laravel</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, dolores.</p>
                    <button class="btn btn-success">Login</button>
                    <button class="btn btn-warning">Register</button>
                </div>

            </div>
        </div>
@endsection