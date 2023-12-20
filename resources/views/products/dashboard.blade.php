@extends('layouts.header')
@section('title', 'Gestion des produits')
@section('content')
    <h3 class="text-center mt-3 mb-3">Bienvenue au tableau de board pour une meilleure gestion de vos produits</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th class="text-center">Description</th>
                <th>Prix</th>
                <th>Stock</th>
                <th class="text-center" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price . ' FCFA' }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <button class="btn btn-sm btn-success border-rounded d-inline">Détails</button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning border-rounded d-inline">Modifier</button>
                    </td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger border-rounded d-inline">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">Aucun produit disponible dans le stock</div>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
@endsection
