<div>
    <div class="container p-5 position-relative">
        {{-- check session.message --}}
        @include('livewire.partials.session-message')
        <h1 class="py-3 text-dark d-flex align-items-center justify-content-between">I tuoi prodotti 
            <a wire:navigate href="create-product" class="text-decoration-none text_primary-light"><i class="fa-solid fa-plus fs-2"></i></a></h1>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- change product --}}
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td width="600">{{ Str::limit($product->description, 100, '...') }}</td>
                                <td>{{ $product->weight }} (g)</td>
                                <td>{{ $product->price }} €</td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between mt-2">
                                        {{-- change route --}}
                                        <a href="{{ route('show-product', $product->id) }}">
                                            <i class="fa-solid fa-eye text-primary" aria-hidden="true"></i>
                                        </a>
                                        {{-- change route --}}
                                        <a href="{{route('edit-product', $product->id)}}">
                                            <i class="fa-solid fa-pencil text-warning" aria-hidden="true"></i>
                                        </a>
                                        <a type="button" class="" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $product->id }}">
                                            <i class="fa-solid fa-trash-can text-danger"></i>
                                        </a>


                                        <!-- Modal -->
                                        <div class="modal fade" id="modalId-{{ $product->id }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-end">
                                                        <button type="button" class="btn-close m-0"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-dark text-center py-3">
                                                        Sei sicuro di eliminare
                                                        questo prodotto?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">Chiudi</button>
                                                        <button wire:click="deleteProduct({{ $product->id }})"
                                                            class="btn btn-outline-success"
                                                            type="submit">Conferma</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <p>There are no products yet!</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
