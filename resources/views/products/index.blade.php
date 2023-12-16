<div class="container my-3 p-3 mx-3 mb-3 mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($produits as $produit)
        <div class="col">
                    <div class="card mb-3">
                        <img src="{{ $produit->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->title }}</h5>
                            <p class="card-text">{{ substr($produit->description,0, 50)."..." }}</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('products.show', $produit) }}" class="btn btn-sm btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
    </div>

    {{ $produits->links() }}
</div>
