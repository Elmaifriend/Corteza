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
    <title>Historia</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="h-dvh container grid grid-rows-[80px_1fr]">
      <!-- Navigation Begin-->
      <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[150px_1fr_150px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
        <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('inicio') }}">Corteza</a>
        <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
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
      <!-- Hero Image Begin-->
      <div class="w-full h-full p-0 md:py-6 bg-background">
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero sm:bg-bottom bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center sm:items-center sm:justify-start sm:pb-20 flex-col-reverse text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Historia</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">La corteza protege al árbol. Nosotros protegemos su hogar.</p>
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
            <h2 class="font-bold text-xl md:text-3xl">Desde mi Niñez</h2>
          </div>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-y-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">1. Una Infancia de Sueños y Dificultades</h3>
          <p>Crecí en un hogar de bajos recursos con una madre que luchaba por sacarnos adelante. Estuvimos moviéndonos de casa en casa, algunas de ellas no tenían las mejores condiciones para vivir.</p>
          <p>Siendo niño recuerdo pensar... 'ojalá un día podamos tener un hogar en donde todos podamos vivir juntos'.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-building-house text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">Por Tijuana</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">2. El Descubrimiento en Tijuana</h3>
          <p>Cuando me mudé a Tijuana para ser misionero y servir a mi nación, me encontré a jóvenes brillantes teniendo trabajos indeseados por la necesidad de conseguir dinero para traer comida a la mesa.</p>
          <p>Encontré también muchas familias que venían del sur de México a Tijuana con la esperanza de un mejor futuro pero que vivían en condiciones incluso peor a las que yo viví cuando era niño.</p>
          <p>Sin mencionar los climas tan extremistas por los que tienen que pasar en diferentes temporadas del año, las rentas tan caras para poder obtener una casa apropiada con costos tan elevados, el tiempo que le toma a una familia construir una casa habitable, los costos tan elevados de materiales y la mano de obra para construir.</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia-2.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-bulb text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">Durante la Oportunidad</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">3. Transformando la Crisis en Oportunidad</h3>
          <p>Así que decidí ver la crisis como una oportunidad, creando un modelo de negocio que pudiera dar empleo a jóvenes brillantes para que pudieran traer lo necesario a la casa y alimentar a sus familias.</p>
          <p>Con una empresa que pudiera proveer materiales y construcción para crear hogares seguros, cálidos y con elegancia a familias mexicanas</p>
          <img class="rounded-2xl" src="{{ Vite::asset('resources/images/historia-4.jpg') }}">
        </div>
      </div>
      <div class="relative lg:ml-4 min-h-64 md:items-start md:grid md:grid-cols-2 gap-6">
        <div class="md:w-auto flex flex-col py-6 rounded-2xl text-center md:text-left md:flex-row gap-2 items-center bg-highlight text-background md:bg-transparent md:text-highlight sticky top-4 md:top-1/2"><i class="bx bxs-leaf text-6xl md:text-8xl"></i>
          <h2 class="font-bold text-xl md:text-3xl">Hasta el nacimiento de Corteza</h2>
        </div>
        <div class="flex flex-col gap-4 justify-center md:border-b-2 md:border-dashed md:border-highlight py-6">
          <h3 class="text-2xl font-bold">4. El Significado de "Corteza"</h3>
          <p>El nombre de <span class="text-highlight font-bold">Corteza</span> llegó un día estando en un campamento de jóvenes en la Laguna Hanson Ensenada, viendo los hermosos árboles que hay alrededor y como están cubiertos de <span class="text-highlight font-bold">Corteza</span>.</p>
          <p>De forma fascinante la <span class="text-highlight font-bold">Corteza</span> transporta nutrientes, almacena agua, contribuye a la cicatrización de heridas del árbol y lo protege dándole seguridad contra animales, contra el clima, manteniéndolo templado al árbol en el frío y trayendo frescura en tiempos calurosos.</p>
          <p>Una cáscara simple pero indispensable para que el árbol esté bien cuidado y cumpla su propósito.</p>
          <p>Ese es <span class="text-highlight font-bold">Corteza:</span> Una empresa que provee lo necesario para cuidar lo más importante... la familia.</p>
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
                <p>Ese es “Corteza” una empresa que provee lo necesario para cuidar lo más importante… la familia</p><i class="bx bxs-quote-alt-right"></i>
              </div>
              <p class="text-lg">- Omar Gallo, Director Ejecutivo</p>
            </div>
          </div>
        </div>
        <!-- Banner Begin-->
        <div class="sm:block hidden w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-highlight bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex items-center justify-around gap-4"><span class="text-sm font-bold sm:text-xl text-background">Cuidado</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Semilla</span><i class="bx bxs-leaf text-base sm:text-4xl text-background"></i><span class="text-sm font-bold sm:text-xl text-background">Refugio</span>
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
          <h2 class="font-bold text-highlight">Nuestros Valores</h2>
          <h1 class="text-2xl sm:text-5xl font-bold">Las raíces que nos guían</h1>
        </div>
        <div class="flex flex-wrap gap-8 content-center justify-center">
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-tree-alt bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Protección</h4>
              <p class="text-xs text-secondary">Como la corteza de un árbol, nos enfocamos en cuidar lo más importante.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-truck bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Servicio</h4>
              <p class="text-xs text-secondary">Siempre pensando en las necesidades de las familias.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-star bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Calidad</h4>
              <p class="text-xs text-secondary">Materiales y construcción que garantizan durabilidad y elegancia.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 justify-center items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-donate-heart bx-lg text-background"></i>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg font-bold leading-5 text-background">Comunidad</h4>
              <p class="text-xs text-secondary">Generamos empleos y apoyamos a quienes más lo necesitan.</p>
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