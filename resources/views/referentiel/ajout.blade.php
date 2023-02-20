@extends('layouts.app')

@section('content')
<form action="{{ route('referentiel.store') }}" method="POST">
    @csrf
    <div class="container mt-5 col-md-8">
        <div class="card">
            <div class="card-header bg-info text-center">
                <h3>Ajout d'un Referentiel</h3>
            </div>
            <div class="card-body">
                <label for="" class="">Libelle</label>
                <input name="libelle" type="text" class="form-control" required>
                <label for="">Validité</label>
                <select name="validited" id="validite_referentiel" class="form-control" required>
                    <option value=""></option>
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
                <label for="" class="">Horaire</label>
                <input name="horaire" id="validite_referentie" type="horaire" class="form-control" required>
                <label for="" class=""> Type </label>
                <select name="type_id" id="" class="form-control" required>
                    <option value=""></option>
                    @foreach($types as $type)
                    <option value="{{ $type->id}}">{{$type->libelle}}</option>
                    @endforeach
                </select>
                <button type="submit" id="btn_referentiel" disabled
                    class="btn btn-success mt-3 offset-5 ">Envoyer</button>
            </div>
        </div>
    </div>
</form>
<script src="{{asset('js/referentiel.js')}}"></script>
@endsection