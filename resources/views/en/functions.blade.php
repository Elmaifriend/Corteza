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
    <title>Functions</title>
  </head>
  <body class="flex flex-col items-center">
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
    <!-- Functions Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col gap-6 py-8">
          <div class="flex flex-col gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-foreground">6 Functions of Corteza</h1>
            <h2 class="text-lg text-foreground-secondary">"The bark is essential for the health and survival of the tree, as it performs functions of protection, transport, storage, and defense"</h2>
          </div>
          <div class="flex flex-wrap gap-4 justify-center">
            <div class="flex flex-wrap gap-4 justify-center min-h-72">
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-shield bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Protection</h4>
                  <p class="text-xs text-secondary">The bark protects the tree from external threats like insects, diseases, and extreme weather</p>
                </div>
              </div>
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-leaf bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Nutrient transport</h4>
                  <p class="text-xs text-secondary">Through the phloem, the bark transports essential nutrients for the tree's growth</p>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 justify-center min-h-72">
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bx-water bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Storage</h4>
                  <p class="text-xs text-secondary">The bark stores water and nutrients, helping the tree survive in adverse conditions</p>
                </div>
              </div>
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-layer bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Thermal insulation</h4>
                  <p class="text-xs text-secondary">The bark regulates the tree's temperature, protecting it from extreme cold and heat</p>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 justify-center min-h-72">
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-band-aid bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Regeneration</h4>
                  <p class="text-xs text-secondary">The bark helps the tree heal its wounds and recover</p>
                </div>
              </div>
              <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-message-alt bx-lg text-background"></i>
                <div class="flex flex-col gap-2">
                  <h4 class="text-lg font-bold leading-5 text-background">Communication and defense</h4>
                  <p class="text-xs text-secondary">The bark contains compounds that defend the tree from insects and animals</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Functions End-->
    <!-- Impact Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-impact bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-none bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col gap-6 items-center py-16">
          <div class="flex flex-col gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-background">Roots that transform lives</h1>
            <h2 class="text-lg text-secondary">Our Impact</h2>
          </div>
          <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover bg-secondary-highlight w-full rounded-4xl sm:max-w-1/2">
            <div class="w-full px-6 py-8 flex flex-col gap-6">
              <div class="p-2 border-b w-full  border-secondary-light-highlight/60" x-data="{ open: false }">
                <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                  <div class="flex items-center gap-2 select-none"><i class="bx bxs-tree-alt text-xl text-background"></i>
                    <h1 class="text-background">Jobs for youth</h1>
                  </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
                </div>
                <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">We train and employ young people, giving them tools for a better future.</div>
              </div>
              <div class="p-2 border-b w-full  border-secondary-light-highlight/60" x-data="{ open: false }">
                <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                  <div class="flex items-center gap-2 select-none"><i class="bx bxs-tree-alt text-xl text-background"></i>
                    <h1 class="text-background">Scholarships and community support</h1>
                  </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
                </div>
                <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">A large portion of our profits go to student scholarships and social projects.</div>
              </div>
              <div class="p-2 border-b w-full  border-secondary-light-highlight/60" x-data="{ open: false }">
                <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                  <div class="flex items-center gap-2 select-none"><i class="bx bxs-tree-alt text-xl text-background"></i>
                    <h1 class="text-background">Homes built</h1>
                  </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
                </div>
                <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Families who have found in our Tiny Houses a safe and loving place.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Impact End-->
    <!-- Footer Begin-->
    <footer class="w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 sm:py-6 md:p-6 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-foreground bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex flex-col gap-8 text-background">
                <div class="flex justify-between items-center flex-col gap-4 md:flex-row"><img class="max-w-62" src="{{ Vite::asset('resources/images/corteza-white.png') }}" alt="Corteza Logo">
                  <div class="flex flex-col gap-4 items-center">
                    <div class="flex gap-2 items-center"><i class="bx bx-envelope bx-sm"></i><span class="font-bold">cortezacym@gmail.com</span></div>
                    <p class="text-tertiary">We provide what's necessary to protect what's most important</p>
                    <div class="flex gap-2 items-center"> <a href="https://www.facebook.com/share/16LkuNhZP1/" class="bx bxl-facebook-circle bx-md hover:text-light-highlight transition-colors cursor-pointer"></a><a href="https://www.instagram.com/corteza.cym?igsh=dHg5NmExcmx6NjZs" class="bx bxl-instagram-alt bx-md hover:text-light-highlight transition-colors cursor-pointer"></a><a href="https://wa.me/526648522228" class="bx bxl-whatsapp bx-md hover:text-light-highlight transition-colors cursor-pointer"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer>
    <!-- Footer End-->
  </body>
</html>