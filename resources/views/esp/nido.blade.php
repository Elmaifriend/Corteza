<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Otros elementos del head -->
    @livewireStyles
</head>

<body>
    <h1>Nido</h1>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">{{ $casa->name }}</h1>
        <p class="text-lg">Precio: ${{ number_format($casa->price, 2) }}</p>

        @livewire('cotizador', [
            'precioBase' => $casa->price,
            'accesorios' => $accesorios,
            "lenguaje" => "eng"
        ])

        <livewire:cotizador :precioBase="$casa->price" :accesorios="$accesorios" :lenguaje="'esp'" />

    </div>
    @livewireScripts
</body>

</html>
