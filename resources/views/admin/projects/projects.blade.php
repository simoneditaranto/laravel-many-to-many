@extends('layouts.app')

@section('content')

    <div class="container py-5">
        
        <h2>Lista dei progetti</h2>

        <div class="row mb-3">
            @foreach($projects as $project)

                <div class="col">
                    <div class="title fw-bold">
                        {{$project->name}}
                    </div>
                    <div class="thumb">
                        <a href="{{route('admin.projects.show', $project->id)}}">
                            <img class="w-100" src="{{asset('storage/' . $project->thumb)}}" alt="">
                        </a>
                    </div>
                    <div class="technologies">
                        {{$project->technologies}}
                    </div>
                    <div class="link-repo text-decoration-underline">
                        {{$project->link_repo}}
                    </div>

                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-secondary">Visualizza</a>
                </div>

            @endforeach
        </div>

        <button type="button" class="btn btn-primary">
            <a href="{{route('admin.projects.create')}}" class="text-white text-decoration-none">Aggiungi nuovo progetto</a>
        </button>
        <button type="button" class="btn btn-info">
            <a href="/admin" class="text-white text-decoration-none">Amministrazione</a>
        </button>

    </div>
    
@endsection