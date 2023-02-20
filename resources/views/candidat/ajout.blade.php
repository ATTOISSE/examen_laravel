@extends('layouts.app')

@section('content')
<form action="{{ route('candidat.store') }}" method="POST">
    @csrf
    <div class="container mt-5 col-md-8 h-70">
        <div class="card">
            <div class="card-header bg-info text-center">
                <h3>Ajouter Candidat</h3>
            </div>
            <div class="card-body">
                <label for="" class="">Nom</label>
                <input name="nom" type="text" class="form-control" required>
                <label for="" class="">Prenom</label>
                <input name="prenom" type="text" class="form-control" required>
                <label for="" class="">Email</label>
                <input name="email" type="email" class="form-control" required>
                <label for="" class="">Nouveau Etude</label>
                <select name="formation_id" id="" class="form-control" required>
                    <option value=""></option>
                    @foreach($formations as $formation)
                    <option value="{{ $formation->id}}" required>{{$formation->nom}}</option>
                    @endforeach
                </select>
                <label for="" class="">Sexe </label>
                <select name="sexe" id="sexe" class="form-control" required>
                    <option value=""></option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                <label for="" class="">Age </label>
                <input name="age" id="age" type="number" class="form-control" required>
                <span class="text-danger" id="span_age" hidden>l'age ne doit pas depasser 35 ans</span><br>
                <button type="submit" id="btn_candidat" class="btn btn-success mt-3 offset-5">Envoyer</button>
            </div>
        </div>
    </div>
</form>

<script src="{{asset('js/candidat.js')}}"></script>
@endsection