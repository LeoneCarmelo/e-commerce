<div class="d-flex justify-content-between align-items-center bg-dark p-2">
    <div class="logo text-light">Ecommerce-logo</div>
    @auth
        <a href="{{ url('/dashboard') }}" class="text-decoration-none" wire:navigate>Dashboard</a>
    @else
    <div class="">
        <a href="{{ route('login') }}" class="text-decoration-none mx-2 text-light" wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-decoration-none mx-2 text-light" wire:navigate>Register</a>
        @endif
    </div>
    @endauth
</div>
