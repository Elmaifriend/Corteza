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
    <title>History</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="h-dvh container grid grid-rows-[80px_1fr]">
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
        <div class="justify-self-end"><a href="{{ route('inicio') }}">ES</a>
        </div>
        <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
      </nav>
      <!-- Navigation End-->
      <!-- Hero Image Begin-->
      <div class="w-full h-full p-0 md:py-6 bg-background">
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero sm:bg-bottom bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center sm:items-center sm:justify-start sm:pb-20 flex-col-reverse text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">History</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">The bark protects the tree. We protect your home.</p>
          </div>
        </div>
      </div>
      <!-- Hero Image End-->
    </div>
    <!-- Timeline Begin-->
    <div id="historia" class="p-6 py-8 container bg-center bg-no-repeat bg-cover  relative" x-data="scrollTracker" x-intersect:enter="trackScroll" x-intersect:leave="untrackScroll">
      <div class="hidden lg:block absolute top-0 left-6 w-1 min-h-48 max-h-full rounded-full bg-gradient-to-b from-secondary-highlight from-[300px] to-light-highlight to-[50vh]" x-bind:style="'height:' + progress + 'px'"></div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto py-6 rounded-2xl text-center md:text-left bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2">
          <div class="flex flex-col md:flex-row gap-2 items-center"><i class="bx bxs-home-heart text-6xl md:text-8xl"></i>
            <h2 class="font-bold text-xl md:text-3xl">Since My Childhood</h2>
          </div>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-y-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">1. A Childhood of Dreams and Hardships</h3>
          <p>I grew up in a low-income household with a mother struggling to make ends meet. We moved from house to house, some of which didn't have the best living conditions.</p>
          <p>As a child I remember thinking... 'I hope one day we can have a home where we can all live together'.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-building-house text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">Through Tijuana</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">2. The Discovery in Tijuana</h3>
          <p>When I moved to Tijuana to be a missionary and serve my nation, I found brilliant young people taking undesirable jobs out of necessity to bring food to the table.</p>
          <p>I also found many families who came from southern Mexico to Tijuana hoping for a better future but living in conditions even worse than what I experienced as a child.</p>
          <p>Not to mention the extreme weather they endure during different seasons, the expensive rents for proper housing, the time it takes a family to build a habitable home, and the high costs of materials and labor for construction.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia-2.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-bulb text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">During the Opportunity</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">3. Transforming Crisis into Opportunity</h3>
          <p>So I decided to see the crisis as an opportunity, creating a business model that could employ brilliant young people so they could bring necessities home and feed their families.</p>
          <p>With a company that could provide materials and construction to create safe, warm, and elegant homes for Mexican families.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia-4.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-leaf text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">Until the Birth of Corteza</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">4. The Meaning of "Corteza"</h3>
          <p>The name <span class="text-highlight font-bold">Corteza</span> came one day while at a youth camp in Laguna Hanson Ensenada, seeing the beautiful trees covered with <span class="text-highlight font-bold">bark</span>.</p>
          <p>Fascinatingly, the <span class="text-highlight font-bold">bark</span> transports nutrients, stores water, contributes to healing the tree's wounds, and protects it by providing security against animals and weather, keeping the tree temperate in cold and bringing freshness in hot times.</p>
          <p>A simple but indispensable shell to keep the tree well cared for and fulfilling its purpose.</p>
          <p>That is <span class="text-highlight font-bold">Corteza:</span> A company that provides what's necessary to care for what's most important... the family.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia-5.jpg') }}">
        </div>
      </div>
    </div>
    <!-- Timeline End-->
    <!-- History Begin-->
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
      <div>
        <div class="flex gap-6 flex-col lg:flex-row">
          <div class="w-full lg:max-w-2xl flex flex-col gap-6 items-center justify-center"><img src="{{ Vite::asset('resources/images/tree.png') }}"></div>
          <div class="flex flex-col justify-center gap-6"> 
            <div class="text-center flex flex-col gap-4">
              <div class="w-full flex gap-2 justify-center text-2xl text-highlight font-bold"><i class="bx bxs-quote-alt-left"></i>
                <p>That is "Corteza" a company that provides what's necessary to care for what's most important... the family</p><i class="bx bxs-quote-alt-right"></i>
              </div>
              <p class="text-lg">- Omar Gallo, Executive Director</p>
            </div>
          </div>
        </div>
        <!-- Banner Begin-->
        <div class="sm:block hidden w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-highlight bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex items-center justify-around gap-4"><span class="text-sm font-bold sm:text-xl text-background">Care</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Seed</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Shelter</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Banner End-->
      </div>
    </div>
    <!-- History End-->
    <!-- Values Begin-->
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
      <div class="flex flex-col gap-8">
        <div>
          <h2 class="font-bold text-highlight">Our Values</h2>
          <h1 class="text-2xl sm:text-5xl font-bold">The roots that guide us</h1>
        </div>
        <div class="flex flex-wrap gap-8 content-center justify-center">
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-tree-alt bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Protection</h4>
              <p class="text-xs text-secondary">Like tree bark, we focus on caring for what's most important.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-truck bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Service</h4>
              <p class="text-xs text-secondary">Always thinking about families' needs.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-star bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Quality</h4>
              <p class="text-xs text-secondary">Materials and construction that guarantee durability and elegance.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-donate-heart bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Community</h4>
              <p class="text-xs text-secondary">We generate jobs and support those most in need.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Values End-->
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