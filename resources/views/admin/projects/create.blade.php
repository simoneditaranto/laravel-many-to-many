@extends('layouts.app')

@section('content')
    <div class="container py-5">
        
        <h1>Inserisci un nuovo progetto</h1>

        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome del progetto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                    {{old('description')}}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine del progetto</label>
                <input type="file" class="form-control @error('thumb') is-invalid @enderror" name="thumb">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="technologies" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control @error('technologies') is-invalid @enderror" id="technologies" name="technologies" value="{{old('technologies')}}">
                @error('technologies')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="link_repo" class="form-label">Link repo GitHub</label>
                <input type="text" class="form-control @error('link_repo') is-invalid @enderror" id="link_repo" name="link_repo" value="{{old('link_repo')}}">
                @error('link_repo')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type_id">Tipo</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value=""></option>
                    @foreach($types as $type) {
                        <option value="{{$type->id}}" {{$type->id == old('type_id') ? 'selected' : ''}}>{{$type->name}}</option>
                    }
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="submit" class="btn btn-warning">
                <a href="/admin/projects" class="text-white text-decoration-none">Annulla</a>
            </button>

        </form>

    </div>
@endsection