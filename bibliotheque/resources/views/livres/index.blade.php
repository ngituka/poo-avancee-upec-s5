@extends('layouts.app')

@section('content')
    <h2>Liste des livres</h2>

    @if($livres->isEmpty())
        <p>Aucun livre enregistré</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année de publication</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livres as $livre)
                    <tr>
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->auteur }}</td>
                        <td>{{ $livre->annee_publication }}</td>
                        <td>
                            <a href="{{ route('livres.edit', $livre->id) }}">Modifier</a>
                            <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce livre ?')">Supprimer</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection