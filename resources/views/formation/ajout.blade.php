@extends('layouts.app')

@section('content')
<form action="{{ route('formation.store') }}" method="POST">
    @csrf
    <div class="container mt-5 col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white text-center">
                <h3>Ajouter Formation</h3>
            </div>
            <div class="card-body">
                <label for="" class="">Nom</label>
                <input name="nom" type="text" class="form-control" required>
                <label for="" class="">Duree</label>
                <input name="duree" type="number" class="form-control" required>
                <label for="" class="">Description</label>
                <textarea name="description" class="form-control" cols="10" rows="2" required></textarea>
                <label for="">Referentiel</label>
                <select name="referentiel_id" id="" class="form-control" required>
                    <option value=""></option>
                    @foreach($referentiels as $referentiel)
                    <option value="{{ $referentiel->id}}">{{$referentiel->libelle}}</option>
                    @endforeach
                </select>
                <label for="" class="">Date debut</label>
                <input id="date_debut" name="date_debut" type="date" class="form-control" required>
                <label for="" class="">IS Started</label>
                <select name="is_started" class="form-control" id="is_started" required>
                    <option value=""></option>
                    <option value="1" id="option1"> Non Commencée</option>
                    <option value="2" id="option2">Commencée</option>
                </select>
                <button type=" submit" class="btn btn-success mt-3 offset-5">Envoyer</button>
            </div>
        </div>
    </div>
</form>
<script src="{{asset('js/formation.js')}}"></script>
@endsection