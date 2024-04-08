<div>
    <div class='row justify-content-center pt-5'>
        <h2 class="text-center mb-3">Aggiungi Prodotto</h2>
        <div class='card w-50 bg_tertiary'>
            <div class='card-body'>
                <form wire:submit='save'>
                    <div class='mb-3'>
                        <label for="name" class="form-label">Name</label>
                        {{-- change name --}}
                        <input wire:model="name" type="text" name="name" id="name" class="form-control"
                            aria-describedby="helpId">
                        <small id="helpId" class="text_primary-light">Type your name address</small>
                        @error('name')
                            <div class='invalid-feedback'>{{ message }}</div>
                        @enderror
                    </div>
                    <div class='mb-3'>
                        <label for="description" class="form-label">Description</label>
                        {{-- change description --}}
                        <input wire:model="description" type="text" name="description" id="description" class="form-control"
                            aria-describedby="helpId">
                        <small id="helpId" class="text_primary-light">Type your description address</small>
                        @error('description')
                            <div class='invalid-feedback'>{{ message }}</div>
                        @enderror
                    </div>
                    <div class='mb-3'>
                        <label for="weight" class="form-label">Weight</label>
                        {{-- change weight --}}
                        <input wire:model="weight" type="text" name="weight" id="weight" class="form-control"
                            aria-describedby="helpId">
                        <small id="helpId" class="text_primary-light">Insert the weight</small>
                        @error('weight')
                            <div class='invalid-feedback'>{{ message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        {{-- change price --}}
                        <input wire:model="price" type="price" name="price" id="price" class="form-control"
                            aria-describedby="helpId" />
                        <small id="helpId" class="text_primary-light">Add price</small>
                        @error('price')
                            <div class='invalid-feedback'>{{ message }}</div>
                        @enderror
                    </div>
                    {{-- change route --}}
                    <button wire:navigate href="/products/index-product" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
                @include('livewire.partials.validation-error')
            </div>
        </div>
    </div>
</div>
