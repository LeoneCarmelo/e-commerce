<div>
    <div class="container-fluid p-5">
        <div class="row row-cols-2 g-4">
            @forelse ($products as $product)
            <form class="col" wire:key="{{ $product->id }}" wire:submit.prevent="addToCart('{{ $product->id }}')">
                <div class="card text-start">
                    {{-- TODO Add Image --}}
                    {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title" /> --}}
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            {{-- image placeholder --}}
                            <div class="" style="width:400px; height:150px; background-color:rgb(20, 209, 149);"></div>
                        </div>
                        <p class="card-text">{{ $product->description }}</p>
                        <span></span>
                            <strong>Disponibilità: </strong>
                            @if ($product->available === 1)
                            <i class="fa-solid fs-5 fa-check text_primary" aria-hidden="true"></i>
                            @else
                            <i class="fa-solid fs-5 fa-xmark text-danger"></i>
                            @endif
                        </span>
                        <div class="d-flex justify-content-between">
                            <span><strong>Peso: </strong> {{ $product->weight }} (g)</span>
                            <button type="submit" class="btn bg-warning fw-bold">Aggiungi al carrello</button>
                            <span><strong>Costo: </strong>{{ $product->price }} €</span>
                        </div>
                    </div>
                </div>
            </form>
            @empty
            <p>Non ci sono prodotti</p>
            @endforelse
        </div>
    </div>
</div>