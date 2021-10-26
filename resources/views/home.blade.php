@extends('layouts.app')

{{-- navbar --}}

@section('active')
    <li class="nav-item">
        <a class="nav-link  navigation active" aria-current="page" href="{{route('home')}}">Accueil</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation" aria-current="page" href="{{url('/produit')}}">Produits</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation" aria-current="page" href="{{url('/services')}}">Services</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation" aria-current="page" href="{{url('/contact')}}">Contact</a>
    </li>
@endsection

{{-- content --}}

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
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
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">
@endsection
