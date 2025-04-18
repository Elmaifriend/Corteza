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
    <title>FAQ</title>
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
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Frequently Asked Questions</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">We answer your questions so you can build with confidence</p>
          </div>
        </div>
      </div>
      <!-- Hero Image End-->
    </div>
    <!-- FAQ Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col items-center gap-4">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">We answer your questions</h1>
            <h2 class="text-lg text-foreground-secondary">Frequently Asked Questions (FAQs)</h2>
          </div>
          <div class="w-full max-w-4xl flex flex-col gap-4">
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Can I purchase a Tiny House if I haven't finished paying for the land?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Yes, as long as you have legally approved documentation showing that although the property is not yet in your name, you are in the process of acquiring it once the contract is finalized.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">How long does it take to build my Tiny House?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Once the agreement contract is signed and the 60% deposit is made, your house will be 100% completed on your property within 15 business days.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do you build throughout Mexico?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Depending on the distance from an airport to the location where the Tiny House will be built.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do Tiny Houses come with any functionality warranty?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Yes, much depends on the land where the owner wants their Tiny House, but regarding our services, they come with a 1-year functionality and factory warranty.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">If I provide my own materials and accessories for my project, how long will it take?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Once your purchase is agreed upon, they will be delivered to your doorstep within 1 to 3 business days.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do materials and accessories come with warranty?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Yes, all your purchases are insured for 1 year, keeping in mind that the warranty is from the factory and not for usage.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">What payment methods do you accept?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Deposits, Transfers, Checks, Cash.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do you provide invoices?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Yes, we just need the RFC where you want the invoice issued.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do you offer packages for multiple Tiny House constructions?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">YES, it depends on the model and quantity of Tiny Houses, contact us by email and we'll be happy to assist you with this.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">Do you offer financing?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Yes, with a certified guarantor.</div>
            </div>
            <h1 class="font-bold">Do you have any other questions? Contact us!</h1>
            <form class="w-full flex flex-col align-center gap-4">
              <fieldset class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="name" placeholder="Enter your full name"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="mail">Email</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="mail" placeholder="Enter your email address"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="phone">Phone (optional)</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="phone" placeholder="Enter your phone number"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="message">How can we help you?</label>
                <textarea class="appearance-none resize-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="textarea" rows="5" name="message" placeholder="Tell us how we can help you"></textarea>
              </fieldset>
              <div class="flex justify-end"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#">Contact Us</a>
              </div>
            </form>
          </div>
        </div>
        <!-- FAQ End-->
      </div>
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