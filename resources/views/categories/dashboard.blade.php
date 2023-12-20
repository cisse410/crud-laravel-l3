@extends('layouts.header')
@section('title', 'Gestion des catégories')
@section('content')
    <h3 class="text-center">Bienvenue au tableau de board de gestion des catégories de votre stock</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th class="text-center" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning d-inline">Modifier</button>
                    </td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="alert alert-danger">Aucune catégorie disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
