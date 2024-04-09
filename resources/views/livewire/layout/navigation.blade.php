<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<!-- Nav tabs -->
<ul class="nav nav-tabs justify-content-between align-items-center">
    <li class="nav-item">
        <div class="d-flex align-items-center">
            <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
            <a wire:navigate href="/" class="nav-link">Home Page</a>
        </div>
    </li>

    <li class="nav-item d-flex">
        <a href="{{route('profile')}}" class="nav-link">{{Auth::user()?->name}}</a>
        <button class="nav-link" wire:click="logout">Logout</button>
    </li>
</ul>