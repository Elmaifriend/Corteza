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
    <title>Policies</title>
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
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-tiny-house-build bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Consideration Policies</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center"></p>
          </div>
        </div>
      </div>
      <!-- Hero Image End-->
    </div>
    <!-- Terms and Conditions Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col items-center gap-4">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Construction Terms and Conditions</h1>
            <h2 class="text-lg text-foreground-secondary">Consideration Policies</h2>
          </div>
          <div class="w-full max-w-4xl flex flex-col gap-4">
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">1. Land requirements</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Prior to project execution, the owner or developer must have the land flat and leveled where the project will be built. If not leveled, you can request our leveling and backhoe team (subject to availability).</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">2. Color and brand selection</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">The client chooses the desired colors and brands for their project, providing Corteza with the brand and color code they prefer for each space.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">3. Location restrictions</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">The project will not be carried out if the land is in a risk zone or invasion area.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">4. Property verification</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">To accept the contract, verification of property rights or notarized purchase agreement for the land where the project is planned must be provided.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">5. Payment policy</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">60% of the project cost is delivered upon signing the contract and the remaining 40% when handing over the keys to your 'Tiny House'.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">6. Delivery time</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">All our models are delivered 100% completed within 15 business days after signing the contract.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">7. Project modifications</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Once the contract is signed, there will be no modifications to the project or payment terms, as Tiny Houses are custom and unique in their style according to the client's selection. If both parties agree to make modifications, a 20% penalty of the total cost of the 'Tiny' will be charged.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">8. Extra services</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">All extra services are subject to availability, and their delivery time is separate from the Tiny House delivery time.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">9. Utility connections</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">We prepare water, electricity, drainage and internet services ready for the corresponding company and/or your professional to connect the house to each service supply (you can hire our extra services with our professionals).</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">10. Price variations</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Our prices are subject to foreign taxes on materials, accessories and services, so they may vary depending on the season when the contract is formalized.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">11. Permits and regulations</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Due to the size of the 'Tiny' and the project development time, Corteza is not responsible for construction permits or compliance with regulations that each community, subdivision or neighborhood may have, so this part is the responsibility of the land owner who contracts our services.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Terms and Conditions End-->
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