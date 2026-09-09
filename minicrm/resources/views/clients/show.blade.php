@extends('layouts.app')
@section('content')
    <h2>{{ $client->name }}</h2>
    <p>Email : {{ $client->email }}</p>
    <p>Ville : {{ $client->city }}</p>
    <a href="{{ route('clients.index') }}">
    Retour
    </a>
@endsection