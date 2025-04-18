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
        <div class="w-full h-full text-background relative sm:rounded-3xl bg-hero bg-center bg-cover">
          <div class="flex flex-col px-6 md:px-8 py-10 sm:rounded-3xl gap-4 justify-center items-center text-center w-full h-full transition-all">
            <h1 class="sm:text-8xl text-4xl font-title font-bold">Preguntas Frecuentes</h1>
            <p class="sm:text-lg text-sm px-2 text-secondary text-center">Resolvemos tus dudas para que construyas con confianza</p>
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
            <h1 class="text-3xl sm:text-5xl font-bold text-highlight">Resolvemos tus dudas</h1>
            <h2 class="text-lg text-foreground-secondary">Preguntas Frecuentes (FAQs)</h2>
          </div>
          <div class="w-full max-w-4xl flex flex-col gap-4">
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Puedo adquirir una Tiny si aún no termino de pagar el terreno?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Si, siempre y cuando tengas documentación legalmente aprobada de que la propiedad aunque no está escriturada a tu nombre, estás en proceso de adquirirla una vez que finiquites el contrato.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Cuánto tardan en construir mi Tiny?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Una vez que se firma el contrato de acuerdo y se da el 60% de anticipo, en 15 días hábiles tendrás tu Casa 100% finalizada en tu propiedad.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Construyen en toda la república mexicana?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Dependiendo la lejanía de un aeropuerto al lugar en donde se llevará a cabo la Tiny.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Las Tiny tienen algún tipo de garantía de funcionalidad?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Si, mucho depende del terreno donde el propietario quiere su Tiny, pero en cuanto a nuestros servicios, estos tienen garantía de funcionalidad y fábrica de 1 año.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Si proveo mis materiales y accesorios para mi proyecto, cuánto se tardan?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Una vez pactada su compra, se entregan a la puerta de su domicilio entre 1 y 3 días hábiles.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Los materiales y accesorios tienen garantía?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Si, todo tu consumo está asegurado por 1 año, teniendo en cuenta que la garantía es de fábrica y no de uso.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Qué opciones de métodos de pago manejan?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Depósitos, Transferencias, Cheques, Efectivo.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Facturan?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Si, solo necesitamos el RFC a donde quieras tu factura.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Tienen paquetes de construcción de múltiples Tiny?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">SI, depende el modelo y la cantidad de Tiny's, comunícate a nuestro correo y con gusto te atendemos para revisarlo.</div>
            </div>
            <div class="p-2 border-b w-full  border-secondary" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none">
                  <h1 class="text-foreground">¿Cuentan con financiamiento?</h1>
                </div><i class="bx bx-chevron-down text-3xl text-foreground transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-tertiary pt-2" x-show="open" x-cloak="" x-collapse="">Si, con un aval certificado.</div>
            </div>
            <h1 class="font-bold">¿Tienes alguna otra pregunta? Contactanos!</h1>
            <form class="w-full flex flex-col align-center gap-4">
              <fieldset class="flex flex-col gap-1">
                <label for="name">Nombre</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="name" placeholder="Ingresa tu nombre completo"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="mail">Correo</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="mail" placeholder="Ingresa tu correo electrónico"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="phone">Telefono (opcional)</label>
                <input class="appearance-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="text" name="phone" placeholder="Ingresa tu numero telefonico"/>
              </fieldset>
              <fieldset class="flex flex-col gap-1">
                <label for="message">¿Cómo podemos ayudarte?</label>
                <textarea class="appearance-none resize-none bg-secondary rounded-2xl text-sm p-4 focus:outline-none focus:ring-2 focus:ring-highlight text-tertiary" type="textarea" rows="5" name="message" placeholder="Cuentanos como podemos ayudarte"></textarea>
              </fieldset>
              <div class="flex justify-end"><a class="flex gap-1 items-center justify-center sm:px-6 px-4 py-3 bg-highlight rounded-2xl font-bold text-background sm:text-lg text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#">Contactanos</a>
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