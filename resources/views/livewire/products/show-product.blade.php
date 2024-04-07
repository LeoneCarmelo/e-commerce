<div>
    <div class="container">
        <div class="row justify-content-center p-5">
            <h3 class="text-light text-center py-3">Dettagli prodotto</h3>
            <div class="card text-star w-50">
                <div class="card-body">
                    <h4 class="card-title"><strong>Name: </strong>{{ $product->name }}</h4>
                    <p class="card-text"><strong>Description: </strong>{{ $product->description }}</p>
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><strong>Weight: </strong>{{ $product->weight }} (g)</p>
                        <p class="card-text"><strong>Price: </strong>{{ $product->price }} €</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
