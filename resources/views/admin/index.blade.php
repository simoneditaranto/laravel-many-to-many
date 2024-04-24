@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Pagina di amministrazione</h1>

        <h3>Benvnuto {{$user->name}}</h3>

        <button type="button" class="btn btn-primary">
            <a href="/admin/projects" class="text-white text-decoration-none">Vedi tutti i progetti</a>
        </button>
        <button type="button" class="btn btn-secondary">
            <a href="/admin/types" class="text-white text-decoration-none">Vedi tutti i tipi</a>
        </button>


    </div>
@endsection