@extends('layouts.app')
@section('content')
    <h2>Ajouter un client</h2>
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf
        <label>Nom</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Ville</label>
        <input type="text" name="city">

        <button type="submit">
            Enregistrer
        </button>
    </form>
@endsection