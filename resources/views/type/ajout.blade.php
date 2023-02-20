@extends('layouts.app')

@section('content')
<form action="{{ route('type.store') }}" method="POST">
    @csrf
    <div class="container mt-5 col-md-8">
        <div class="card">
            <div class="card-header bg-info text-center">
                <h3>Ajout d'un Type</h3>
            </div>
            <div class="card-body">
                <label for="" class="">Libelle</label>
                <input name="libelle" type="text" class="form-control" required>
                <button type="submit" class="btn btn-success mt-3 offset-5 ">Envoyer</button>
            </div>
        </div>
    </div>
</form>
@endsection