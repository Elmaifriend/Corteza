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
    <title>Benefits</title>
  </head>
  <body class="flex flex-col items-center">
    <!-- Navigation Begin-->
    <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[160px_1fr_160px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">      <h1 class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight">Corteza</h1>
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
          <li class="py-3"><a href="{{ route('en_floema') }}">Floema</a></li>
          <li class="py-3"><a href="{{ route('en_faq') }}">FAQ</a></li>
        </div>
      </ul>
      <div class="justify-self-end"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('en_nido') }}">Get a Quote</a>
      </div>
      <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
    </nav>
    <!-- Navigation End-->
    <!-- 8 Benefits Begin-->
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover "> 
      <div class="flex gap-6 flex-col md:flex-row">
        <div class="w-full min-w-72 max-w-lg min-h-[500px] md:min-h-[700px] flex flex-col gap-8 justify-center items-center px-4 py-16 rounded-4xl bg-floema bg-center bg-no-repeat bg-cover">
          <img class="sm:max-w-38 max-w-34" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-background">8 benefits of owning your own "Tiny House"</h1>
            <h2 class="text-lg text-secondary">Benefits that transform families</h2>
          </div>
        </div>
        <div class="flex flex-col gap-6 justify-center w-full">
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">1. Customized spaces, adapted to your needs</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Every family is unique, which is why we design 'Tiny' homes that fit your needs. Whether it's space to grow, a place to work from home, or a recreation area, our designs are flexible and functional.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">2. Long-term economic savings</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Our 'Tiny houses' not only have an affordable initial price, but also represent future savings. Being smaller, they require less energy for heating, cooling and maintenance, which translates into lower bills and a more economical lifestyle.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">3. Quality that lasts</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">We use premium materials and robust construction techniques to ensure your 'Tiny House' is safe, sturdy and durable. This means fewer worries about repairs and more time to enjoy with your family.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">4. Style and comfort without compromise</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Our designs combine aesthetics and functionality. Every space is optimized to offer comfort and style, with modern finishes and details that reflect the warmth of home.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">5. Sustainability and connection with nature</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">By choosing a Corteza 'Tiny House', your family contributes to environmental care. Our materials and processes are eco-friendly, and the minimalist lifestyle fosters a deeper connection with nature.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">6. Freedom and mobility</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Dream of changing scenery? Our 'Tiny Houses' can be built on any type of flat terrain, allowing your family to explore new places without leaving behind the comfort of home. Imagine waking up by the sea or in the middle of a forest or desert!</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">7. Less stress, more family time</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">By living in a smaller, more manageable space, families reduce time spent on household chores and increase time to share moments together. Less chores, more quality time.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">8. Ongoing advice and support</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">At Corteza, we don't leave you alone after purchase. We offer personalized advice and technical support to ensure your experience with your 'Tiny House' is always positive.</div>
          </div>
        </div>
      </div>
    </div>
    <!-- 8 Benefits End-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-highlight bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container"> 
        <div class="w-full flex gap-2 justify-center text-2xl text-center"><i class="bx bxs-quote-alt-left text-highlight"></i>
          <p><span class="font-bold text-highlight">Corteza</span> doesn't just offer a home, but a new way of living for families: <span class="font-bold text-highlight">more economical</span>, <span class="font-bold text-highlight">more sustainable</span> and <span class="font-bold text-highlight">full of possibilities</span>.</p><i class="bx bxs-quote-alt-right text-highlight"></i>
        </div>
      </div>
    </div>
    <!-- Floema Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-highlight bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex gap-6 flex-col md:flex-row">
          <div class="w-full min-w-72 max-w-sm flex flex-col gap-6 items-center px-4 py-16 rounded-4xl bg-floema-secondary bg-center bg-no-repeat bg-cover">
            <div class="flex flex-col-reverse gap-2 text-center">
              <h1 class="text-3xl sm:text-5xl font-bold text-background">Floema</h1>
              <h2 class="text-lg text-secondary">The Materials That Nourish Your Home</h2>
            </div><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('floema') }}">Get Quote</a>
          </div>
          <div class="flex flex-col gap-6"> 
            <div>
              <h2 class="text-2xl text-background font-bold">Need materials for your project?</h2>
              <p class="text-sm text-foreground-secondary">At Corteza, we're inspired by the phloem, the tissue that transports nutrients in trees, to offer you the highest quality materials that nourish and strengthen your home. From woods to accessories and tools, each product is selected to ensure durability, functionality and beauty.</p>
            </div>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-background">Material Suppliers</h3>
              <div class="flex flex-wrap gap-2 content-center justify-around">
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-tree-alt bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Woods</h4>
                    <p class="text-xs text-tertiary">Durable and high quality</p>
                  </div>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-basket bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Accessories</h4>
                    <p class="text-xs text-tertiary">Functional and aesthetic</p>
                  </div>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-wrench bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Tools</h4>
                    <p class="text-xs text-tertiary">Reliable and efficient</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Floema End-->
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