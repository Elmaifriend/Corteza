<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Otros elementos del head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    @livewireStyles
</head>

<body
    class="bg-secondary grid grid-cols-1 justify-items-center lg:fixed lg:inset-0 lg:h-screen lg:grid-rows-[94px_calc(100dvh_-_84px)] lg:overflow-hidden">
    <!-- Navigation Begin-->
    <div class="my-4 flex w-full flex-col items-center">
        <nav class="bg-background container relative z-10 col-span-12 flex w-full select-none flex-row items-center justify-between rounded-2xl p-4 lg:grid lg:grid-cols-[150px_1fr_150px]"
            x-data="{ open: false }" x-on:click.outside="open = false">
        <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('inicio') }}">Corteza</a>
            <ul class="lg:translate-0 mdlg!bg-none bg-background text-secondary-highlight divide-secondary-highlight/10 absolute left-1/2 top-[120%] z-10 flex w-11/12 -translate-x-1/2 flex-col divide-y-2 divide-dashed rounded-2xl p-4 md:top-[150%] lg:static lg:!flex lg:w-full lg:flex-row lg:divide-none lg:p-0"
                x-show="open" x-cloak="" x-transition="">
                <li class="block py-3 lg:hidden">
            <a class="font-title font-bold text-4xl text-highlight cursor-pointer" href="{{ route('inicio') }}">Corteza</a>
                </li>
                <div class="w-full items-center justify-center gap-8 lg:flex">
                    <li class="group relative py-3 lg:p-0" x-data="{ open: false }" x-on:click="open = !open"
                        x-on:mouseover="if(window.innerWidth &gt;= 768) open = true"
                        x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                        <div class="flex cursor-pointer items-center justify-between"><a
                                href="{{ route('inicio') }}">Inicio</a><i
                                class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in"
                                x-bind:class="{ 'transform rotate-180': open }"></i></div>
                        <ul class="lg:!bg-background divide-secondary-highlight/10 left-0 top-full mt-2 w-full divide-y-2 divide-dashed pl-4 lg:absolute lg:m-0 lg:w-max lg:rounded-2xl lg:p-4"
                            x-show="open" x-cloak="" x-collapse="">
                            <li class="py-3"><a href="{{ route('corteza') }}">Qué es Corteza</a></li>
                            <li class="py-3"><a href="{{ route('funciones') }}">6 Funciones de Corteza</a></li>
                        </ul>
                    </li>
                    <li class="py-3"><a href="{{ route('historia') }}">Historia</a></li>
                    <li class="group relative py-3 lg:p-0" x-data="{ open: false }" x-on:click="open = !open"
                        x-on:mouseover="if(window.innerWidth &gt;= 768) open = true"
                        x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                        <div class="flex cursor-pointer items-center justify-between"><a
                                href="{{ route('tiny-houses') }}">Tiny Houses</a><i
                                class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in"
                                x-bind:class="{ 'transform rotate-180': open }"></i></div>
                        <ul class="lg:!bg-background divide-secondary-highlight/10 left-0 top-full mt-2 w-full divide-y-2 divide-dashed pl-4 lg:absolute lg:m-0 lg:w-max lg:rounded-2xl lg:p-4"
                            x-show="open" x-cloak="" x-collapse="">
                  <li class="py-3"><a href="{{ route('tiny-houses') }}">Modelos</a></li>
                            <li class="py-3"><a href="{{ route('beneficios') }}">Beneficios</a></li>
                            <li class="py-3"><a href="{{ route('polizas') }}">Polizas</a></li>
                        </ul>
                    </li>
                    <li class="py-3"><a href="{{ route('floema') }}">Floema</a></li>
                    <li class="py-3"><a href="{{ route('faq') }}">FAQ</a></li>
                </div>
            </ul>
        <div class="justify-self-end text-foreground-secondary"><a class="flex gap-1 items-center" href="{{ route('home') }}">EN<i class="bx bx-world text-xl"></i></a>
        </div>
            <button
                class="bx bx-menu bx-md hover:text-foreground/60 cursor-pointer transition-colors ease-in lg:!hidden"
                x-on:click="open = !open"></button>
        </nav>
    </div>
    <!-- Navigation End-->
    <div class="container grid h-full grid-cols-1 gap-4 py-4 lg:grid-cols-12 lg:grid-rows-[auto_1fr]">
        <!-- Left Column -->
        <div class="overflow-hidden rounded-2xl lg:col-span-8">
            <div class="bg-background flex h-full flex-col gap-4 p-4 py-6 md:p-8 lg:overflow-y-auto">
                <h1 class="font-title text-highlight text-4xl font-bold">Modelo {{ $casa->name }}</h1>

                <div x-data="modelGallery([
                    '{{ Vite::asset('resources/images/tiny-houses/nido-01.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-02.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-03.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-04.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-05.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-06.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-07.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-08.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-09.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-10.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-11.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-12.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-13.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-14.jpg') }}',
                    '{{ Vite::asset('resources/images/tiny-houses/nido-15.jpg') }}',
                ])" class="flex flex-col gap-2">
                    <div class="relative">
                        <i class="bx bxs-chevron-left bx-lg text-foreground/40 hover:scale-85 absolute left-0 top-1/2 -translate-y-1/2 cursor-pointer transition-transform md:left-4"
                            x-on:click="previousImage()"></i>
                        <div class="md:h-140 h-80 w-full select-none rounded-2xl bg-contain bg-center bg-no-repeat"
                            x-bind:style="{ 'background-image': `url('${currentImage()}')` }" x-transition></div>
                        <i class="bx bxs-chevron-right bx-lg text-foreground/40 hover:scale-85 absolute right-0 top-1/2 -translate-y-1/2 cursor-pointer transition-transform md:right-4"
                            x-on:click="nextImage()"></i>
                    </div>
                    <div class="flex justify-center gap-4">
                        <template x-for="(image, index) in images.slice(0, maxPreviewImages)">
                            <img class="flex h-20 w-20 cursor-pointer select-none items-center justify-center rounded-2xl bg-cover transition-transform hover:scale-105 hover:shadow-lg"
                                x-bind:src="image"
                                x-bind:class="galleryIndex == index ? 'ring-2 ring-secondary-light-highlight' : ''"
                                x-on:click="setImage(index)">
                        </template>
                        <div class="bg-secondary flex h-20 w-20 cursor-pointer select-none items-center justify-center rounded-2xl transition-transform hover:scale-105 hover:shadow-lg"
                            x-bind:class="galleryIndex >= maxPreviewImages ? 'ring-2 ring-secondary-light-highlight' : ''"
                            x-on:click="toggleModal">
                            <p class="text-foreground-secondary" x-text="`+${images.length - maxPreviewImages}`"></p>
                        </div>
                        <div x-show="showImagesModal" x-transition x-on:click="toggleModal"
                            class="w-vw bg-foreground/60 pointer-events-auto fixed inset-0 z-50 flex min-h-dvh justify-center overflow-auto p-4 py-4">
                            <div class="flex max-h-fit max-w-7xl flex-wrap items-center justify-center gap-4">
                                <template x-for="(image, index) in images">
                                    <img x-bind:src="image" x-on:click="setImage(index)"
                                        class="max-w-120 md:max-w-72 w-full rounded-2xl transition-transform hover:scale-105 hover:shadow-lg lg:max-w-64"
                                        x-bind:class="{
                                            'ring-2 ring-secondary-light-highlight': galleryIndex == index,
                                            'cursor-pointer': true
                                        }">
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <div>
                            <h2 class="text-foreground-secondary text-lg">El refugio cálido y acogedor para reconectar
                                con
                                lo esencia</h2>
                            <h1 class="text-highlight font-title text-4xl font-bold">Descripción del Modelo</h1>
                        </div>
                        <p>El Nido representa el hogar como un refugio cálido y acogedor, donde todo está diseñado para
                            brindar comodidad y seguridad. Inspirado en la simplicidad de los nidos de pájaros, este
                            modelo
                            es perfecto para quienes buscan un espacio íntimo y funcional, donde cada detalle está
                            pensado
                            para maximizar el espacio sin sacrificar la elegancia. Es el lugar ideal para reconectar con
                            uno
                            mismo y con lo esencial.</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div>
                            <h4 class="text-foreground-secondary">4x6 metros</h4>
                            <h3 class="text-highlight font-title text-3xl font-bold">Básica</h3>
                        </div>
                        <div class="grid grid-cols-2">
                            <div>
                                <span class="font-bold">Distribución:</span>
                                <ul>
                                    <li>2 habitaciones</li>
                                    <li>Cocina</li>
                                    <li>Sala</li>
                                </ul>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <span class="font-bold">Área construida:</span>
                                    <ul>
                                        <li>24 m²</li>
                                    </ul>
                                </div>
                                <div>
                                    <span class="font-bold">Características:</span>
                                    <ul>
                                        <li>100% funcional</li>
                                        <li>Completamente habitable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div>
                            <h4 class="text-foreground-secondary">4x6 metros</h4>
                            <h3 class="text-highlight font-title text-3xl font-bold">Intermedia</h3>
                        </div>
                        <div class="grid grid-cols-2">
                            <div>
                                <span class="font-bold">Distribución:</span>
                                <ul>
                                    <li>1 habitación</li>
                                    <li>1 baño</li>
                                    <li>Cocina</li>
                                    <li>Sala</li>
                                </ul>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <span class="font-bold">Área construida:</span>
                                    <ul>
                                        <li>24 m²</li>
                                    </ul>
                                </div>
                                <div>
                                    <span class="font-bold">Características:</span>
                                    <ul>
                                        <li>100% funcional</li>
                                        <li>Completamente habitable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div>
                            <h4 class="text-foreground-secondary">4x7 metros</h4>
                            <h3 class="text-highlight font-title text-3xl font-bold">Lujo</h3>
                        </div>
                        <div class="grid grid-cols-2">
                            <div>
                                <span class="font-bold">Distribución:</span>
                                <ul>
                                    <li>1 habitación</li>
                                    <li>1 baño</li>
                                    <li>Cocina</li>
                                    <li>Sala</li>
                                    <li>Terraza con pérgola</li>
                                    <li>2 closets</li>
                                </ul>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <span class="font-bold">Área construida:</span>
                                    <ul>
                                        <li>28 m²</li>
                                    </ul>
                                </div>
                                <div>
                                    <span class="font-bold">Características:</span>
                                    <ul>
                                        <li>100% funcional</li>
                                        <li>Completamente habitable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl lg:col-span-4">
            <div class="bg-background flex h-full flex-col p-4 md:px-8 md:py-6 lg:overflow-y-auto">
                @livewire('cotizador', [
                    'modeloBase' => $casa,
                    'accesorios' => $accesorios,
                    'lenguaje' => 'esp',
                ])
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
