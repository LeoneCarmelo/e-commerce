<div class="d-flex justify-content-between align-items-center bg-dark p-2">
    <div>
        <a href="{{ url('/') }}" class="logo text-light text-decoration-none">Ecommerce-logo</a>
        <a href="{{ url('products') }}" class="logo text-light text-decoration-none ms-3">Products</a>
    </div>
    @auth
        <a href="{{ url('/dashboard') }}" class="text-decoration-none" wire:navigate>Dashboard</a>
    @else
    <div class="">
        <a href="{{ route('login') }}" class="text-decoration-none mx-2 text-light {{ Route::currentRouteName() === 'login' ? 'd-none' : '' }}"  wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-decoration-none mx-2 text-light {{ Route::currentRouteName() === 'register' ? 'd-none' : '' }}" wire:navigate>Register</a>
        @endif
    </div>
    @endauth
</div>
