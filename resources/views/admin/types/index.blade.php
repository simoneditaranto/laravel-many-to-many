@extends('layouts.app')

@section('content')

    <div class="container py-5">
        
        <h2>Lista delle categorie</h2>

        <div class="row mb-3">
           
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Visualizza</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                <tr>
                    <th scope="row">{{$type->id}}</th>
                    <td>{{$type->name}}</td>
                    <td>{{$type->description ?? 'null'}}</td>
                    <td>
                        <a href="{{route('admin.types.show', $type->id)}}" class="btn btn-primary">Visualizza</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
            
        </div>

        
        <button type="button" class="btn btn-success">
            <a href="{{route('admin.types.create')}}" class="text-white text-decoration-none">Aggiungi nuovo tipo</a>
        </button>
        <button type="button" class="btn btn-info">
            <a href="/admin" class="text-white text-decoration-none">Amministrazione</a>
        </button>

    </div>
    
@endsection