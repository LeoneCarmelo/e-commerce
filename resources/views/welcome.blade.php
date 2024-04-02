<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
    </div>
    <h1 class="text-center py-4">Ecommerce</h1>
    <div class="bg-info p-4 mb-3">
        <h3 class="text-center">First Banner</h3>
        <p class="w-75">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis rem consequuntur odit similique. Numquam vel aut officiis, doloremque consectetur natus, fugiat dolor tempore at optio non aperiam temporibus eaque voluptates earum sit quasi velit soluta perferendis voluptatum nobis rerum ea est. Praesentium neque vitae sint ipsum pariatur dignissimos assumenda architecto?</p>
    </div>
    <div class="p-4 mb-3">
        <h3 class="text-center">About us</h3>
        <p class="w-50 mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis rem consequuntur odit similique. Numquam vel aut officiis, doloremque consectetur natus, fugiat dolor tempore at optio non aperiam temporibus eaque voluptates earum sit quasi velit soluta perferendis voluptatum nobis rerum ea est. Praesentium neque vitae sint ipsum pariatur dignissimos assumenda architecto?</p>
    </div>
    <div class=" bg-warning p-4 mb-3">
        <h3>Contacts</h3>
        <p class="w-75">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis rem consequuntur odit similique. Numquam vel aut officiis, doloremque consectetur natus, fugiat dolor tempore at optio non aperiam temporibus eaque voluptates earum sit quasi velit soluta perferendis voluptatum nobis rerum ea est. Praesentium neque vitae sint ipsum pariatur dignissimos assumenda architecto?</p>
    </div>
    @livewireScripts
</body>

</html>