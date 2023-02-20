@extends('layouts.app')

@section('content')
<div class="container mt-5 col-md-8">
    <div class="card-header bg-info text-white">
        <h3>Liste des Formations</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>N°</th>
            <th>Nom </th>
            <th>Duree</th>
            <th>Date Debut</th>
            <th>Is start</th>
            <th>Referentiel</th>
        </thead>
        <tbody>
            @foreach($formations as $formation)
            <tr>
                <td>{{$formation->id}}</td>
                <td>{{$formation->nom}}</td>
                <td>{{$formation->duree}}</td>
                <td>{{$formation->date_debut}}</td>
                <td>{{$formation->is_started}}</td>
                <td>{{$formation->referentiel->libelle}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection