<div>
    <div class="row justify-content-center py-4">
        <div class="card w-50 bg_tertiary">
            <h3 class="text-center my-3 text_primary-light">Modifica il tuo prodotto</h3>
            <div class="card-body">
                <form wire:submit="update">
                    <div class="mb-3">
                        <label for="name" class="form-label text_primary-light">Name</label>
                        <input wire:model="name" type="text" name="name" id="name" class="form-control bg_quaternary"
                            placeholder="Insert your name" aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text_primary">Type the name of the product</small>
                        @error('name')
                            <div class='text-danger'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label text_primary-light">Description</label>
                        <input wire:model="description" type="description" name="description" id="description" class="form-control bg_quaternary"
                            placeholder="Insert your description" aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text_primary">Type your description</small>
                        @error('description')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label text_primary-light">Weight</label>
                        <input wire:model="weight" type="text" name="weight" id="weight" class="form-control bg_quaternary"
                            aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text_primary">Type the weight of the product</small>
                        @error('weight')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text_primary-light">Price</label>
                        <input wire:model="price" type="text" name="price" id="price" class="form-control bg_quaternary"
                            aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text_primary">Type the price of the product</small>
                        @error('price')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    {{--Change route--}}
                    <div class="d-flex justify-content-end gap-3">
                        <button wire:navigate href="/products/index-product" class="btn btn-secondary text-light">Back</button>
                        <button type="submit" class="btn btn-primary text-light">
                            Submit
                        </button>
                    </div>
                </form>
                @include('livewire.partials.validation-error')
            </div>
        </div>
    </div>
</div>
