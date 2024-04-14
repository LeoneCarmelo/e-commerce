<div>
    <div class="container mt-5">
        <span class="">
            <i class="fa-solid fa-cart-shopping fs-2 me-2 text-light"></i>
            Carrello = {{ $totalQuantity }}
        </span>
        @forelse ($products as $product)
        <div class="card w-50 mt-3">
            <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <p class="card-text">{{Str::limit($product->description, 150, '...') }}</p>

                <span><strong>Quantity: </strong>{{ implode($product->quantity) }}</span>
            </div>
        </div> 
        @empty
            <p>Il carrello è vuoto</p>
        @endforelse    
    </div>
</div>