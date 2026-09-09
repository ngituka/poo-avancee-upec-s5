@extends('layouts.app')
@section('content')
    <h2>Liste des produits</h2>
    @foreach($products as $product)
    <p>
    {{ $product->name }}
    -
    {{ $product->price }}
    -
    {{ $product->stock }}
    </p>
    @endforeach
@endsection