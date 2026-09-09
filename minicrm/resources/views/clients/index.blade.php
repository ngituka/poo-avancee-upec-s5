@extends('layouts.app')
@section('content')
    <h2>Liste des clients</h2>
    @foreach ($clients as $client)
        <p>
        {{ $client->name }}
        -
        {{ $client->email }}
        -
        {{ $client->city }}
        </p>
    @endforeach
    <a href="{{route('clients.create')}}">
        Ajouter un client
    </a>  
    <a href="{{route('clients.show', $client)}}">
        Voir
    </a>    
@endsection