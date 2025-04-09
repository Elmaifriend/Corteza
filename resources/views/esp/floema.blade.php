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
    <title>Floema</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="h-dvh container grid grid-rows-[80px_1fr]">
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
        <div class="justify-self-end"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#">Cotizador</a>
        </div>
        <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
      </nav>
      <!-- Navigation End-->
      <!-- Hero Image Begin-->
      <div class="w-full h-full p-0 md:py-6 bg-background">
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-floema sm:bg-left bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center sm:items-start sm:pl-4 sm:text-left text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Floema</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">Los nutrientes que tu proyecto necesita para crecer</p>
          </div>
        </div>
      </div>
      <!-- Hero Image End-->
    </div>
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col gap-6 items-center">
          <div class="flex flex-col gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">¿Qué es Floema?</h1>
            <h2 class="text-lg text-foreground-secondary"></h2>
          </div>
          <div class="flex flex-col gap-2 max-w-2xl text-tertiary text-center">
            <p>En botánica se denomina “floema” al tejido conductor encargado del transporte de nutrientes orgánicos e inorgánicos, producidos por la parte aérea fotosintética y autótrofa</p>
            <p>El Floema lleva a cabo el transporte masivo de agua y carbohidratos desde los sitios de síntesis; es decir, desde los órganos fuente hacia los órganos vertedero o demanda, proveyendo lo que necesita para el cumplimiento de su propósito.</p>
          </div>
        </div>
        <div class="w-full py-4 flex gap-2 justify-center text-2xl text-center text-highlight font-bold"><i class="bx bxs-quote-alt-left"></i>
          <p>Nuestra meta es poder proveer de los mejores Materiales (Nutrientes) para el cumplimiento de tus sueños</p><i class="bx bxs-quote-alt-right"></i>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-highlight bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex items-center justify-around gap-4"><span class="text-sm font-bold sm:text-xl text-background">Servicio</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Calidad</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Garantía</span>
        </div>
      </div>
    </div>
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
      <div class="flex flex-col gap-12 items-center" id="catalog">
        <div>
          <div class="flex flex-col gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Nuestros Productos</h1>
            <h2 class="text-lg text-foreground-secondary"></h2>
          </div>
          <p class="text-foreground-secondary text-center">Contamos con una amplia variedad de materiales y herramientas para construcción, adaptados a tu presupuesto y necesidades</p>
        </div>
        <div class="w-full flex flex-col gap-12" x-data="catalogData">
          <template x-for="(section, sectionIndex) in sections" x-bind:key="sectionIndex">
            <template x-if="currentSection === sectionIndex" x-transition="">
              <div class="flex flex-col gap-14">
                <div class="py-4 border-y-2 border-dashed border-highlight">
                  <h2 class="font-bold text-highlight text-4xl" x-text="section.title"></h2>
                  <p class="text-foreground-secondary" x-text="section.description"></p>
                </div>
                <div class="flex flex-wrap justify-center gap-4">
                  <template x-for="product in section.products" x-bind:key="product.name">
                    <div class="w-full max-w-sm flex flex-col gap-4">
                    <div class="h-[250px] w-full rounded-2xl bg-cover bg-center" x-bind:style="`background-image: url({{ Vite::asset('resources/images/corteza-products/') }}${product.image});`" x-bind:alt="product.name"></div>
                      <div>
                        <h3 class="font-bold text-2xl" x-text="product.name"></h3>
                        <p class="text-tertiary" x-text="product.description"></p>
                      </div>
                    </div>
                  </template>
                </div>
              </div>
            </template>
          </template>
          <div class="flex justify-center gap-4"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in flex-row-reverse" href="#catalog" x-on:click="currentSection = currentSection - 1" x-show="currentSection &gt; 0">Anterior<i class="bx bx-left-arrow-alt"></i></a><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#catalog" x-on:click="currentSection = currentSection + 1" x-show="currentSection &lt; sections.length - 1">Siguiente<i class="bx bx-right-arrow-alt"></i></a>
          </div>
          <div class="flex justify-center">
            <form class="w-full max-w-4xl flex flex-col align-center gap-6">
              <h1 class="font-bold text-highlight text-4xl">Cotiza tus Productos</h1>
              <fieldset class="flex flex-col gap-1">
                <label for="name">Nombre</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="name" placeholder="Ingresa tu Nombre Completo"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="mail">Correo</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="mail" placeholder="Ingresa tu Correo Electrónico"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="phone">Teléfono</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="phone" placeholder="Ingresa tu Número de Teléfono"/>
              </fieldset>
              <div class="border-t border-gray-300 my-2"></div>
              <fieldset class="flex flex-col gap-1">
                <label for="materials">Materiales Por Cotizar</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="materials" placeholder="Selecciona los materiales que necesites"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="city">Ciudad de Entrega</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="city" placeholder="Ingresa la ciudad donde se realizará la entrega"/>
              </fieldset>
              <div class="border-t border-gray-300 my-2"></div>
              <fieldset class="flex flex-col gap-1">
                <label for="subdivision">Fraccionamiento</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="subdivision" placeholder="Ingresa el fraccionamiento o colonia de entrega"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="message">¿Cómo podemos ayudarte?</label>
                <textarea class="appearance-none resize-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="textarea" rows="5" name="message" placeholder="Cuéntanos como podemos ayudarte"></textarea>
              </fieldset>
              <div class="flex justify-end mt-4"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#">Realizar Cotización</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Begin-->
    <footer class="w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 bg-background bg-center bg-no-repeat bg-cover py-0 sm:py-6">
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