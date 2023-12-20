@extends('layouts.header')
@section('title', 'Liste des produits')

@section('content')
    @include('products.index')
@endsection

<footer>
    @include('layouts.footer')
</footer>

