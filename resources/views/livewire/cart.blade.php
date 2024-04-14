<div>
    <div class="container mt-5">
        <div class="row flex-column">
            {{-- <span class="">
                <i class="fa-solid fa-cart-shopping fs-2 me-2 text-light"></i>
                Carrello = {{ $totalQuantity }}
            </span> --}}
            @forelse ($products as $product)
            <form class="col" wire:key="{{ $product->id }}" wire:submit.prevent="addToCart('{{ $product->id }}')">
                <div class="card w-50 mt-3">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{Str::limit($product->description, 150, '...') }}</p>
                        <div class="d-flex align-items-center">
                            <span><strong>Quantity: </strong>{{ implode($product->quantity) }}</span>
                            <button type="submit" class="bg-transparent border-0">+</button>
                        </div>
                    </div>
                </div>
            </form>
            @empty
            <p>Il carrello è vuoto</p>
            @endforelse
        </div>
    </div>
</div>