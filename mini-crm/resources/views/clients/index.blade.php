@extends ('layouts.app')

@section('content')
    <table>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td>{{ $c['name'] }}</td>
                    <td>{{ $c['email'] }}</td>
                    <td>{{ $c['city'] }}</td>
                    <td>
                        <!-- Lien pour "ouvrir" / voir la fiche du client -->
                        <a href="{{ route('clients.show', $c) }}">Voir</a>

                        <!-- Lien pour ouvrir le formulaire de modification -->
                        <a href="{{ route('clients.edit', $c) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>