<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer="" src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Corteza</title>
  </head>
  <body class="flex flex-col items-center">
    <!-- Navigation Begin-->
    <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[150px_1fr_150px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
      <h1 class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight">Corteza</h1>
      <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
        <li class="block lg:hidden py-3">
          <h1 class="font-title font-bold text-4xl text-highlight">Corteza</h1>
        </li>
        <div class="lg:flex gap-8 w-full justify-center items-center">
          <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
            <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('inicio') }}">Inicio</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
            <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
              <li class="py-3"><a href="{{ route('corteza') }}">Qué es Corteza</a></li>
              <li class="py-3"><a href="{{ route('funciones') }}">6 Funciones de Corteza</a></li>
            </ul>
          </li>
          <li class="py-3"><a href="{{ route('historia') }}">Historia</a></li>
          <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
            <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('tiny-houses') }}">Tiny Houses</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
            <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
              <li class="py-3"><a href="{{ route('beneficios') }}">Beneficios</a></li>
              <li class="py-3"><a href="{{ route('polizas') }}">Polizas</a></li>
            </ul>
          </li>
          <li class="py-3"><a href="{{ route('floema') }}">Floema</a></li>
          <li class="py-3"><a href="{{ route('faq') }}">FAQ</a></li>
        </div>
      </ul>
      <div class="justify-self-end"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('nido') }}">Cotizador</a>
      </div>
      <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
    </nav>
    <!-- Navigation End-->
    <!-- About Us Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col gap-12 md:flex-row" x-data="{ open: false }">
          <div class="flex flex-col gap-7 items-start justify-center sm:max-w-1/2">
            <div class="flex flex-col gap-2 text-left">
              <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Sobre Nosotros</h1>
              <h2 class="text-lg text-foreground-secondary">Cuidamos lo que más importa… tu familia</h2>
            </div>
            <div>
              <p class="py-2">Corteza es una empresa mexicana que tiene el concepto de “negocio como misión” o “negocio con propósito” el cual es poder proveer lo necesario para traer calidad y elegancia al hogar, proveyendo materiales para cualquier proyecto de desarrollo y construyendo hogares cálidos, seguros y con un estilo de distinción, a un costo accesible y con un concepto minimalista.</p>
              <div x-show="open" x-cloak="" x-collapse="">
                <p class="py-2">Proveemos empleos principalmente a jóvenes, enseñándoles diferentes cualidades, con el deseo de desarrollar en ellos destrezas, aptitudes y habilidades vocacionales para su presente y futuro, así como para apoyarlos financieramente a ellos y sus familias, sus deseos por estudiar y sobresalir. </p>
                <p class="py-2">Gran parte de las ganancias de Corteza van hacia becas de estudiantes, familias que contribuyen a la sociedad, necesidades comunitarias y fondos para emprender negocios con el mismo concepto de solucionar problemas sociales y generar empleos con espacios amigables, seguros y con principios y valores para aquellos que son parte.</p>
                <div class="border-l-4 border-highlight p-4 mt-4">
                  <p>Nuestra esencia está en proteger, nutrir y sostener lo que más valoras: tu hogar y tu familia.</p>
                </div>
              </div>
            </div><a class="flex gap-1 items-center justify-center py-2 font-bold text-highlight sm:text-lg text-center select-none hover:text-dark-highlight/90 transition-colors ease-in" href="#" x-on:click="open = !open" x-text="open ? 'Leer Menos' : 'Leer Más'">Leer Más</a>
          </div>
          <div class="h-full w-full min-h-[500px] md:min-h-[600px] rounded-4xl bg-roots bg-cover bg-center"></div>
        </div>
      </div>
    </div>
    <!-- About Us End-->
    <!-- Mission Begin-->
    <div class="w-full flex flex-col items-center bg-highlight text-background">
      <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
        <div class="flex flex-col gap-8 items-center">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-background">Proteger, Nutrir, y Transformar</h1>
            <h2 class="text-lg text-secondary">Nuestra Nuestra Misión</h2>
          </div>
          <div class="flex flex-col gap-6 justify-center w-full sm:max-w-1/2">
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-shield text-xl text-background"></i>
                  <h1 class="text-background">1. Proteger</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Hogares seguros que resguardan a tu familia.</div>
            </div>
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-background"></i>
                  <h1 class="text-background">2. Nutrir</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Materiales de calidad que perduran y sostienen.</div>
            </div>
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-star text-xl text-background"></i>
                  <h1 class="text-background">3. Transformar</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Vidas a través del empleo, la educación y el apoyo comunitario.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mission End-->
    <!-- Models Begin-->
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
      <div class="flex flex-col gap-4">
        <div class="flex flex-col-reverse gap-2 text-center">
          <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Los Favoritos de Corteza</h1>
          <h2 class="text-lg text-foreground-secondary">Pequeños Espacios, Grandes Sueños</h2>
        </div>
        <div class="flex flex-wrap gap-4 justify-center items-center">
          <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="{{ Vite::asset('resources/images/model-placeholder.jpg') }}"/>
            <div class="flex flex-col items-center">
              <h6 class="text-highlight font-bold">Nido</h6><span class="text-tertiary">4x6 metros</span>
            </div>
            <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Cálido</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Acogedor</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Esencial</span>
            </div>
          </div>
          <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="{{ Vite::asset('resources/images/model-placeholder.jpg') }}"/>
            <div class="flex flex-col items-center">
              <h6 class="text-highlight font-bold">Raíz</h6><span class="text-tertiary">5x6 metros</span>
            </div>
            <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Simple</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Funcional</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Minimalista</span>
            </div>
          </div>
          <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="{{ Vite::asset('resources/images/model-placeholder.jpg') }}"/>
            <div class="flex flex-col items-center">
              <h6 class="text-highlight font-bold">Copa</h6><span class="text-tertiary">6x6 metros</span>
            </div>
            <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Elegante</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Amplio</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Sofisticado</span>
            </div>
          </div>
        </div><a class="flex gap-1 items-center justify-center py-2 font-bold text-highlight sm:text-lg text-center select-none hover:text-dark-highlight/90 transition-colors ease-in" href="{{ route('tiny-houses') }}">Ver más Modelos</a>
      </div>
    </div>
    <!-- Models End-->
    <!-- Footer Begin-->
    <footer class="w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 sm:py-6 md:p-6 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-foreground bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex flex-col gap-8 text-background">
                <div class="flex justify-between items-center flex-col gap-4 md:flex-row"><img class="max-w-62" src="{{ Vite::asset('resources/images/corteza-white.png') }}" alt="Logo de Corteza">
                  <div class="flex flex-col gap-4 items-center">
                    <div class="flex gap-2 items-center"><i class="bx bx-envelope bx-sm"></i><span class="font-bold">cortezacym@gmail.com</span></div>
                    <p class="text-tertiary">Proveemos lo necesario para proteger lo más importante</p>
                    <div class="flex gap-2 items-center"> <i class="bx bxl-facebook-circle bx-md hover:text-light-highlight transition-colors cursor-pointer"></i><i class="bx bxl-instagram-alt bx-md hover:text-light-highlight transition-colors cursor-pointer"></i><i class="bx bxl-whatsapp bx-md hover:text-light-highlight transition-colors cursor-pointer"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer>
    <!-- Footer End-->
  </body>
</html>