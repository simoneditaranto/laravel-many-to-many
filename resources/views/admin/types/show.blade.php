@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title">{{$type->name}}</h2>
              
                <a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modifica</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elmina progetto
                </button>
            </div>    

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare il futipometto "{{$type->name}}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                            <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
                                @csrf
                                @method("DELETE")

                                <button class="btn btn-danger">Elimina</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary">
            <a href="/admin/types" class="text-white text-decoration-none">Torna ai progetti</a>
        </button>
    </div>


@endsection