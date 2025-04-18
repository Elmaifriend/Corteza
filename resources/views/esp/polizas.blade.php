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
    <title>Pólizas</title>
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
      <!-- Hero Image Begin-->
      <div class="w-full h-full p-0 md:py-6 bg-background">
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-tiny-house-build bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Pólizas de Consideración</h1>
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
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Términos y Condiciones de Construcción</h1>
            <h2 class="text-lg text-foreground-secondary">Pólizas de Consideración</h2>
          </div>
          <div class="w-full max-w-4xl flex flex-col gap-4">
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">1. Requisitos del terreno</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Se requiere que previo a la realización del proyecto el propietario o desarrollador tenga el terreno plano y nivelado en donde se construirá el proyecto, si no lo tiene nivelado puede solicitar a nuestro equipo de nivelación y retroexcavadora. (sujeto a disposición).</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">2. Selección de colores y marcas</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">El cliente elije los colores y marcas deseados para su proyecto, dándole a Corteza la marca y código del color que le haya sido de su agrado para cada espacio.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">3. Restricciones de ubicación</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">El proyecto no se llevará a cabo si el terreno se encuentra en zona de riesgo o de invasión.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">4. Verificación de propiedad</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Para aceptar la contratación se tiene que hacer verificación de derecho de propiedad o contrato notariado de compraventa sobre el suelo en donde se tiene pensado realizar el proyecto.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">5. Política de pagos</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Se entrega el 60% del costo del proyecto al firmar el contrato y el 40% restante al entregarle las llaves de su 'Tiny House'.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">6. Tiempo de entrega</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Todos nuestros modelos los entregamos al 100% finalizado el proyecto antes de los 15 días hábiles después de la firma del contrato.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">7. Modificaciones al proyecto</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Una vez firmado el contrato no habrá modificaciones en el proyecto ni en los tiempos de pago, ya que las Tiny House son custom y únicas en su estilo de acuerdo con la selección del cliente, en caso de que ambas partes accedan a hacer la modificación se cobrará un 20% de penalización del costo total de la 'Tiny'.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">8. Servicios extras</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Todos los servicios extras están bajo disponibilidad, el tiempo de entrega de estos es separado al tiempo de entrega de las 'Tiny Houses'.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">9. Conexiones de servicios</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Los servicios de agua, luz, drenaje e internet se los dejamos listos solo para que la compañía correspondiente y/o su profesional haga la conexión de la casa al suministro de cada servicio (puede contratar nuestros servicios extras con nuestros profesionales).</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">10. Variación de precios</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Nuestros precios están sujetos a impuestos del extranjero en materiales, accesorios y servicios, por lo que podrían variar dependiendo la temporada en que se oficialice el contrato.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">11. Permisos y regulaciones</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Por las medidas de las 'Tiny' y el tiempo de elaboración del proyecto, Corteza no se hace responsable de los permisos de construcción ni del cumplimiento del reglamento que cada comunidad, fraccionamiento o colonia tenga, por lo que esta parte corre por responsabilidad del propietario de la tierra que contrata nuestros servicios.</div>
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