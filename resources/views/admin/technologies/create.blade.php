@extends('layouts.app')

@section('content')
    <div class="container py-5">
        
        <h1>Inserisci un nuova tecnologia</h1>

        <form action="{{route('admin.technologies.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome della tecnologia</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{old('color')}}">
                @error('color')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Icona</label>
                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{old('icon')}}">
                @error('icon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="submit" class="btn btn-warning">
                <a href="/admin/technologies" class="text-white text-decoration-none">Annulla</a>
            </button>

        </form>

    </div>
@endsection