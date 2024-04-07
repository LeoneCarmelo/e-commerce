<div>
    <div class="row justify-content-center pt-5">
        <div class="card w-50">
            <div class="card-body">
                <form wire:submit="update">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" name="name" id="name" class="form-control"
                            placeholder="Insert your name" aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text-muted">Type the name of the product</small>
                        @error('name')
                            <div class='text-danger'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input wire:model="description" type="description" name="description" id="description" class="form-control"
                            placeholder="Insert your description" aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text-muted">Type your description</small>
                        @error('description')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight</label>
                        <input wire:model="weight" type="text" name="weight" id="weight" class="form-control"
                            aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text-muted">Type the weight of the product</small>
                        @error('weight')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input wire:model="price" type="text" name="price" id="price" class="form-control"
                            aria-describedby="helpId" value=""/>
                        <small id="helpId" class="text-muted">Type the price of the product</small>
                        @error('price')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    {{--Change route--}}
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
