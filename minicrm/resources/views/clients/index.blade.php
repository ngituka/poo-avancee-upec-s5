@extends('layouts.app')
@section('content')
    <h2>Liste des clients</h2>
    <p>
    {{ $client->id }}
    -
    {{ $client->name }}
    -
    {{ $client->email }}
    -
    {{ $client->city }}
    </p>
@endsection