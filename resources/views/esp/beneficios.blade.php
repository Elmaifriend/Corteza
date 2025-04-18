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
    <title>Beneficios</title>
  </head>
  <body class="flex flex-col items-center">
    <!-- Navigation Begin-->
    <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[150px_1fr_150px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
        <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('inicio') }}">Corteza</a>      <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
        <li class="block lg:hidden py-3">
            <a class="font-title font-bold text-4xl text-highlight cursor-pointer" href="{{ route('inicio') }}">Corteza</a>
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
                  <li class="py-3"><a href="{{ route('tiny-houses') }}">Modelos</a></li>
              <li class="py-3"><a href="{{ route('beneficios') }}">Beneficios</a></li>
              <li class="py-3"><a href="{{ route('polizas') }}">Polizas</a></li>
            </ul>
          </li>
          <li class="py-3"><a href="{{ route('floema') }}">Floema</a></li>
          <li class="py-3"><a href="{{ route('faq') }}">FAQ</a></li>
        </div>
      </ul>
        <div class="justify-self-end"><a href="{{ route('home') }}">EN</a>
        </div>
      <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
    </nav>
    <!-- Navigation End-->
    <!-- 8 Functions Begin-->
    <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover "> 
      <div class="flex gap-6 flex-col md:flex-row">
        <div class="w-full min-w-72 max-w-lg min-h-[500px] md:min-h-[700px] flex flex-col gap-8 justify-center items-center px-4 py-16 rounded-4xl bg-floema bg-center bg-no-repeat bg-cover">
          <img class="sm:max-w-38 max-w-34" src="{{ Vite::asset('resources/images/tiny-white.png') }}" alt="Tiny Logo">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-background">8 beneficios de tener tu propia “Tiny House”</h1>
            <h2 class="text-lg text-secondary">Beneficios que transforman familias</h2>
          </div>
        </div>
        <div class="flex flex-col gap-6 justify-center w-full">
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">1. Espacios personalizados, adaptados a tus necesidades</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Cada familia es única, y por eso diseñamos las 'Tiny' que se ajustan a tus necesidades. Ya sea un espacio para crecer, un lugar para trabajar desde casa o un área de recreación, nuestros diseños son flexibles y funcionales.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">2. Ahorro económico a largo plazo</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Nuestras 'Tiny houses' no solo tienen un precio accesible al inicio, sino que también representan un ahorro a futuro. Al ser más pequeñas, requieren menos energía para calefacción, enfriamiento y mantenimiento, lo que se traduce en facturas más bajas y un estilo de vida más económico.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">3. Calidad que perdura</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Utilizamos materiales premium y técnicas de construcción robustas para garantizar que tu 'Tiny House' sea segura, resistente y duradera. Esto significa menos preocupaciones por reparaciones y más tiempo para disfrutar en familia.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">4. Estilo y comodidad sin sacrificios</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Nuestros diseños combinan estética y funcionalidad. Cada espacio está optimizado para ofrecer comodidad y estilo, con acabados modernos y detalles que reflejan la calidez del hogar.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">5. Sostenibilidad y conexión con la naturaleza</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Al elegir una 'Tiny House' de Corteza, tu familia contribuye al cuidado del medio ambiente. Nuestros materiales y procesos son 'eco-friendly', y el estilo de vida minimalista fomenta una conexión más profunda con la naturaleza.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">6. Libertad y movilidad</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">¿Sueñas con cambiar de escenario? Nuestras 'Tiny Houses' pueden ser construidas en cualquier tipo de terreno (plano), lo que permite a tu familia explorar nuevos lugares sin dejar atrás la comodidad de su hogar. ¡Imagina despertar frente al mar o en medio de un bosque o en el desierto!</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">7. Menos estrés, más tiempo en familia</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Al vivir en un espacio más pequeño y manejable, las familias reducen el tiempo dedicado a tareas del hogar y aumentan el tiempo para compartir momentos juntos. Menos quehaceres, más tiempo de calidad.</div>
          </div>
          <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
            <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
              <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-highlight"></i>
                <h1 class="text-highlight">8. Asesoría y soporte continuo</h1>
              </div><i class="bx bx-chevron-down text-3xl text-highlight transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
            </div>
            <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">En Corteza, no te dejamos solo después de la compra. Ofrecemos asesoría personalizada y soporte técnico para asegurarnos de que tu experiencia con tu 'Tiny House' sea siempre positiva.</div>
          </div>
        </div>
      </div>
    </div>
    <!-- 8 Functions End-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-highlight bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container"> 
        <div class="w-full flex gap-2 justify-center text-2xl text-center"><i class="bx bxs-quote-alt-left text-highlight"></i>
          <p><span class="font-bold text-highlight">Corteza</span> no solo ofrece un hogar, sino una nueva forma de vivir para las familias: <span class="font-bold text-highlight">más económica</span>, <span class="font-bold text-highlight">más sostenible</span> y <span class="font-bold text-highlight">llena de posibilidades</span>.</p><i class="bx bxs-quote-alt-right text-highlight"></i>
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
              <h2 class="text-lg text-secondary">Los Materiales que Nutren tu Hogar</h2>
            </div><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="{{ route('floema') }}">Cotizar</a>
          </div>
          <div class="flex flex-col gap-6"> 
            <div>
              <h2 class="text-2xl text-background font-bold">¿Necesitas materiales para tu proyecto?</h2>
              <p class="text-sm text-foreground-secondary">En Corteza, nos inspiramos en el floema, el tejido que transporta nutrientes en los árboles, para ofrecerte materiales de la más alta calidad que nutren y fortalecen tu hogar. Desde maderas hasta accesorios y herramientas, cada producto está seleccionado para garantizar durabilidad, funcionalidad y belleza.</p>
            </div>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-background">Proveedores de Materiales</h3>
              <div class="flex flex-wrap gap-2 content-center justify-around">
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-tree-alt bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Maderas</h4>
                    <p class="text-xs text-tertiary">Durables y de alta calidad</p>
                  </div>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-basket bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Accesorios</h4>
                    <p class="text-xs text-tertiary">Funcionales y estéticos</p>
                  </div>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-background text-center"><i class="bx bxs-wrench bx-lg text-highlight"></i>
                  <div class="flex flex-col gap-2">
                    <h4 class="text-lg font-bold leading-5 text-foreground">Herramientas</h4>
                    <p class="text-xs text-tertiary">Confiables y eficientes</p>
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