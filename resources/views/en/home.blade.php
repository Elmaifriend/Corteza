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
    <title>Home</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="min-h-dvh container grid grid-rows-[auto_1fr]">
      <!-- Navigation Begin-->
      <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[160px_1fr_160px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
        <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a>
        <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
          <li class="block lg:hidden py-3">
            <a class="font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a>
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
                  <li class="py-3"><a href="{{ route('en_tiny-houses') }}">Models</a></li>
                <li class="py-3"><a href="{{ route('benefits') }}">Benefits</a></li>
                <li class="py-3"><a href="{{ route('policies') }}">Policies</a></li>
              </ul>
            </li>
            <li class="py-3"><a href="{{ route('en_floema') }}">Floema</a></li>
            <li class="py-3"><a href="{{ route('en_faq') }}">FAQ</a></li>
          </div>
        </ul>
        <div class="justify-self-end text-foreground-secondary"><a class="flex gap-1 items-center" href="{{ route('inicio') }}">ES<i class="bx bx-world text-xl"></i></a>
        </div>
        <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
      </nav>
      <!-- Navigation End-->
      <!-- Hero Image Begin-->
      <div class="min-h-[700px] w-full h-full p-0 md:py-6 bg-background">
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center text-center w-full h-full transition-all" x-data="{ isHovered: false }" x-bind:class="{ 'backdrop-blur-md bg-foreground/20' : isHovered }">
            <h1 class="sm:text-8xl text-4xl font-title font-bold"></h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center"></p><img class="hover:rotate-x-12 hover:-translate-y-5 hover:scale-105 hover:drop-shadow-[0px_0px_10px_var(--color-highlight)] sm:max-w-sm max-w-64 transition-all ease-in-out duration-200" x-bind:class="{ 'rotate-x-12 -translate-y-5 scale-105 drop-shadow-[0px_0px_10px_var(--color-highlight)]' : isHovered }" x-on:mouseover="if(window.innerWidth &gt;= 768) isHovered = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) isHovered = false" x-on:click="if(window.innerWidth &lt;= 768) isHovered = !isHovered" x-on:click.outside="if(window.innerWidth &lt;= 768) isHovered = false" src="{{ Vite::asset('resources/images/corteza-white-green.png') }}" alt="Corteza Logo">
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">"We provide what's necessary to protect what's most important"</p>
            <div class="flex flex-col items-center absolute bottom-6 left-1/2 transform -translate-x-1/2 cursor-pointer hover:-translate-y-1 hover:scale-110 hover:animate-none transition-transform animate-bounce"><a class="sm:text-lg" href="{{ route('en_tiny-houses') }}">View Models</a><i class="bx bx-chevron-down bx-md"></i></div>
          </div>
        </div>
      </div>
      <!-- Banner Begin-->
      <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
        <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-highlight bg-center bg-no-repeat bg-cover h-full container">
          <div class="flex items-center justify-around gap-4"><span class="text-sm font-bold sm:text-xl text-background">Service</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Quality</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Protection</span>
          </div>
        </div>
      </div>
      <!-- Banner End-->
      <!-- Hero Image End-->
    </div>
    <!-- Footer Begin-->
    <footer class="w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 sm:py-6 md:p-6 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-foreground bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex flex-col gap-8 text-background">
                <div class="flex justify-between items-center flex-col gap-4 md:flex-row"><img class="max-w-62" src="{{ Vite::asset('resources/images/corteza-white.png') }}" alt="Corteza Logo">
                  <div class="flex flex-col gap-4 items-center">
                    <div class="flex gap-2 items-center"><i class="bx bx-envelope bx-sm"></i><span class="font-bold">cortezacym@gmail.com</span></div>
                    <p class="text-tertiary">We provide what's necessary to protect what's most important</p>
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
