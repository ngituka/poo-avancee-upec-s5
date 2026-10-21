@extends('layouts.app')

@section('content')
    <h2>Ajouter un nouveau livre</h2>

    <form action="{{ route('livres.store') }}" method="POST">
        @csrf

        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" value="{{ old('titre') }}">
            @error('titre')
                <span style="color: red;">{{ $message }}</span>
            @enderror <!-- Correction ici -->
        </div>

        <div>
            <label for="auteur">Auteur :</label>
            <input type="text" id="auteur" name="auteur" value="{{ old('auteur') }}">
            @error('auteur')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="annee_publication">Année de publication :</label>
            <input type="number" id="annee_publication" name="annee_publication" value="{{ old('annee_publication') }}">
            @error('annee_publication')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Ajouter</button>
    </form>
@endsection