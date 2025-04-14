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
    <title>Tiny Houses</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="h-screen flex flex-col items-center w-full snap-y snap-mandatory overflow-y-scroll">
      <div class="container snap-center snap-always shrink-0">
        <!-- Navigation Begin-->
        <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[150px_1fr] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
          <h1 class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight">Corteza</h1>
          <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
            <li class="block lg:hidden py-3">
              <h1 class="font-title font-bold text-4xl text-highlight">Corteza</h1>
            </li>
            <div class="lg:flex gap-8 w-full justify-center items-center">
              <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('home') }}">Home</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
                <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
                  <li class="py-3"><a href="{{ route('en_corteza') }}">What is Corteza</a></li>
                  <li class="py-3"><a href="{{ route('functions') }}">6 Functions of Corteza</a></li>
                </ul>
              </li>
              <li class="py-3"><a href="{{ route('history') }}">History</a></li>
              <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('en_tiny-houses') }}">Tiny Houses</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
                <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
                  <li class="py-3"><a href="{{ route('benefits') }}">Benefits</a></li>
                  <li class="py-3"><a href="{{ route('policies') }}">Policies</a></li>
                </ul>
              </li>
              <li class="py-3"><a href="{{ route('floema') }}">Floema</a></li>
              <li class="py-3"><a href="{{ route('faq') }}">FAQ</a></li>
            </div>
          </ul>
          <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
        </nav>
        <!-- Navigation End-->
      </div>
      <div class="h-dvh container snap-center snap-always shrink-0">
        <!-- Hero Image Begin-->
        <div class="w-full h-full p-0 md:py-6 bg-background">
          <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero sm:bg-left bg-center bg-cover">
            <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center sm:items-start sm:pl-4 sm:text-left text-center w-full h-full transition-all">
              <h1 class="sm:text-8xl text-4xl font-title font-bold"></h1>
              <p class="sm:text-lg text-sm px-2 text-secondary text-center"></p><span class="relative inline-block before:absolute before:left-0 before:-top-3 before:h-2 before:w-1/2 before:block before:-skew-y-12 before:bg-background after:absolute after:left-1/2 after:-top-3 after:h-2 after:w-1/2 after:block after:skew-y-12 after:bg-background">
                <div class="flex flex-col items-center"><span class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-highlight"><span class="relative text-xs sm:text-sm px-2">"Tiny"</span></span>
                  <h1 class="sm:text-8xl text-7xl font-title font-bold inline">Houses</h1>
                </div>
                <p class="sm:text-lg text-sm px-2 text-secondary text-center">-Let's build together the home your family deserves-</p></span>
              <div class="flex flex-col items-center absolute bottom-6 left-1/2 transform -translate-x-1/2 cursor-pointer hover:-translate-y-1 hover:scale-110 hover:animate-none transition-transform animate-bounce"><a class="sm:text-lg" href="#nido">Get a Quote</a><i class="bx bx-chevron-down bx-md"></i></div>
            </div>
          </div>
        </div>
        <!-- Hero Image End-->
      </div>
      <!-- Models Begin-->
      <div id="nido" class="h-dvh container snap-center snap-always shrink-0">
        <div class="py-6 h-full">
          <div class="container w-full h-full rounded-2xl sm:p-14 pb-6 p-4 mb-4 bg-model-nido bg-cover bg-center">
            <div class="relative w-full h-full flex flex-col gap-2 items-center justify-center">
              <div class="flex flex-col gap-4 items-center mt-auto">
                <p class="text-foreground-secondary">4x8 meters</p>
                <div class="flex flex-col gap-2 items-center">
                  <div class="flex gap-2 text-7xl">
                    <h2 class="text-background font-bold">Nido</h2><i class="bx bxs-leaf text-highlight"></i>
                  </div>
                  <p class="text-secondary">Your warm and cozy refuge</p>
                </div>
              </div>
              <div class="mt-auto"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-full font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_nido') }}">Get Quote</a>
              </div><img class="absolute sm:top-full sm:-translate-y-full top-0 right-0 sm:max-w-32 max-w-28 opacity-70" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo"/>
            </div>
          </div>
        </div>
      </div>
      <div class="h-dvh container snap-center snap-always shrink-0">
        <div class="py-6 h-full">
          <div class="container w-full h-full rounded-2xl sm:p-14 pb-6 p-4 mb-4 bg-model-raiz bg-cover bg-center">
            <div class="relative w-full h-full flex flex-col gap-2 items-center justify-center">
              <div class="flex flex-col gap-4 items-center mt-auto">
                <p class="text-foreground-secondary">5x6 meters</p>
                <div class="flex flex-col gap-2 items-center">
                  <div class="flex gap-2 text-7xl">
                    <h2 class="text-background font-bold">Raiz</h2><i class="bx bxs-leaf text-highlight"></i>
                  </div>
                  <p class="text-secondary">The essence of simple and functional</p>
                </div>
              </div>
              <div class="mt-auto"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-full font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_raiz') }}">Get Quote</a>
              </div><img class="absolute sm:top-full sm:-translate-y-full top-0 right-0 sm:max-w-32 max-w-28 opacity-70" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo"/>
            </div>
          </div>
        </div>
      </div>
      <div class="h-dvh container snap-center snap-always shrink-0">
        <div class="py-6 h-full">
          <div class="container w-full h-full rounded-2xl sm:p-14 pb-6 p-4 mb-4 bg-model-savia bg-cover bg-center">
            <div class="relative w-full h-full flex flex-col gap-2 items-center justify-center">
              <div class="flex flex-col gap-4 items-center mt-auto">
                <p class="text-foreground-secondary">3x12 meters</p>
                <div class="flex flex-col gap-2 items-center">
                  <div class="flex gap-2 text-7xl">
                    <h2 class="text-background font-bold">Savia</h2><i class="bx bxs-leaf text-highlight"></i>
                  </div>
                  <p class="text-secondary">Modern and harmonious design</p>
                </div>
              </div>
              <div class="mt-auto"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-full font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_savia') }}">Get Quote</a>
              </div><img class="absolute sm:top-full sm:-translate-y-full top-0 right-0 sm:max-w-32 max-w-28 opacity-70" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo"/>
            </div>
          </div>
        </div>
      </div>
      <div class="h-dvh container snap-center snap-always shrink-0">
        <div class="py-6 h-full">
          <div class="container w-full h-full rounded-2xl sm:p-14 pb-6 p-4 mb-4 bg-model-copa bg-cover bg-center">
            <div class="relative w-full h-full flex flex-col gap-2 items-center justify-center">
              <div class="flex flex-col gap-4 items-center mt-auto">
                <p class="text-foreground-secondary">6x6 meters</p>
                <div class="flex flex-col gap-2 items-center">
                  <div class="flex gap-2 text-7xl">
                    <h2 class="text-background font-bold">Copa</h2><i class="bx bxs-leaf text-highlight"></i>
                  </div>
                  <p class="text-secondary">Elegance and spaciousness in every detail</p>
                </div>
              </div>
              <div class="mt-auto"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-full font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_copa') }}">Get Quote</a>
              </div><img class="absolute sm:top-full sm:-translate-y-full top-0 right-0 sm:max-w-32 max-w-28 opacity-70" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo"/>
            </div>
          </div>
        </div>
      </div>
      <div class="h-dvh container snap-center snap-always shrink-0">
        <div class="py-6 h-full">
          <div class="container w-full h-full rounded-2xl sm:p-14 pb-6 p-4 mb-4 bg-model-ebano bg-cover bg-center">
            <div class="relative w-full h-full flex flex-col gap-2 items-center justify-center">
              <div class="flex flex-col gap-4 items-center mt-auto">
                <p class="text-foreground-secondary">6x6 meters</p>
                <div class="flex flex-col gap-2 items-center">
                  <div class="flex gap-2 text-7xl">
                    <h2 class="text-background font-bold">Ébano</h2><i class="bx bxs-leaf text-highlight"></i>
                  </div>
                  <p class="text-secondary">The epitome of luxury and exclusivity</p>
                </div>
              </div>
              <div class="mt-auto"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-full font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_ebano') }}">Get Quote</a>
              </div><img class="absolute sm:top-full sm:-translate-y-full top-0 right-0 sm:max-w-32 max-w-28 opacity-70" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo"/>
            </div>
          </div>
        </div>
      </div>
      <!-- Models End-->
    </div>
  </body>
</html>