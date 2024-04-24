@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        
        <h1 class="display-5 fw-bold">
            Benvenuto nel tuo portfolio personale
        </h1>

        <p class="col-md-8 fs-4">Accedi o Registrati per entrare</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg" type="button">Accedi</a>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg" type="button">Registrati</a>
    </div>
</div>

@endsection