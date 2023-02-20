@extends('layouts.app')

@section('content')
<div class="container mt-5 col-md-8">
    <div class="card-header bg-info text-white">
        <h3>Liste des Referentiels</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>N°</th>
            <th>Libelle </th>
            <th>Horaire</th>
            <th>Validité</th>
            <th>Type</th>
        </thead>
        <tbody>
            @foreach($referentiels as $referentiel)
            <tr>
                <td>{{$referentiel->id}}</td>
                <td>{{$referentiel->libelle}}</td>
                <td>{{$referentiel->horaire}}</td>
                <td>{{$referentiel->validited}}</td>
                <td>{{$referentiel->type->libelle}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection