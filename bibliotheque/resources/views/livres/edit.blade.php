@extends('layouts.app')

@section('content')
    <h2>Modifier le livre</h2>

    <form action="{{ route('livres.update', $livre->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indispensable pour simuler une requête PUT en HTML -->

        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" value="{{ old('titre', $livre->titre) }}">
            @error('titre')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="auteur">Auteur :</label>
            <input type="text" id="auteur" name="auteur" value="{{ old('auteur', $livre->auteur) }}">
            @error('auteur')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="annee_publication">Année de publication :</label>
            <input type="number" id="annee_publication" name="annee_publication" value="{{ old('annee_publication', $livre->annee_publication) }}">
            @error('annee_publication')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection