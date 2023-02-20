@extends('layouts.app')

@section('content')
<div class="container mt-5 col-md-8">
    <div class="card-header bg-info text-white">
        <h3>Liste des Candidats</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>N°</th>
            <th>Nom </th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Formation</th>
        </thead>
        <tbody>
            @foreach($candidats as $candidat)
            <tr>
                <td>{{$candidat->id}}</td>
                <td>{{$candidat->nom}}</td>
                <td>{{$candidat->prenom}}</td>
                <td>{{$candidat->email}}</td>
                <td>{{$candidat->age}}</td>
                <td>{{$candidat->sexe}}</td>
                <td>{{$candidat->formation->nom}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection