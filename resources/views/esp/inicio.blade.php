<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Home</title>
  </head>
  <body class="flex flex-col items-center">
    <div class="w-full flex justify-between items-center md:px-10 px-6 md:py-8 py-4 container">
      <h1 class="font-title font-bold text-4xl text-highlight">Corteza</h1>
      <ul class="md:flex gap-4 hidden">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Tiny Houses</a></li>
        <li><a href="#">Cotizador</a></li>
        <li><a href="#">Floema</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
    <!-- Hero Image Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-3xl bg-hero bg-center bg-no-repeat bg-cover container">
        <div class="md:h-[500px] h-[400px] text-background relative">
          <div class="flex flex-col gap-2 justify-center items-center w-full h-full">
            <h1 class="sm:text-7xl text-5xl font-title font-bold">Corteza</h1>
            <p class="sm:text-lg text-xs text-secondary text-center">Proveemos lo necesario para proteger lo más importante</p>
          </div>
          <div class="flex flex-col items-center absolute bottom-0 left-1/2 transform -translate-x-1/2"><span class="sm:text-lg text-xs">Ver Modelos</span><i class="bx bx-chevron-down bx-md"></i></div>
        </div>
      </div>
    </div>
    <!-- Hero Image End-->
    <!-- Models Begin-->
    <div class="p-6 py-8 flex flex-col gap-6 items-center container">
      <div class="flex flex-col gap-2 text-center">
        <h1 class="text-5xl font-bold text-highlight">Los Favoritos de Corteza</h1>
        <h2 class="text-sm text-tertiary">Pequeños Espacios, Grandes Sueños</h2>
      </div>
      <div class="flex flex-wrap gap-4 justify-center items-center">
        <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="/assets/model-placeholder.jpg"/>
          <div class="flex flex-col items-center"><span class="text-tertiary">4x6 metros</span>
            <h6 class="text-highlight font-bold">Nido</h6>
          </div>
          <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Cálido</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Acogedor</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Esencial</span>
          </div>
        </div>
        <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="/assets/model-placeholder.jpg"/>
          <div class="flex flex-col items-center"><span class="text-tertiary">5x6 metros</span>
            <h6 class="text-highlight font-bold">Raíz</h6>
          </div>
          <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Simple</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Funcional</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Minimalista</span>
          </div>
        </div>
        <div class="flex flex-col gap-4 max-w-96"><img class="rounded-4xl" src="/assets/model-placeholder.jpg"/>
          <div class="flex flex-col items-center"><span class="text-tertiary">6x6 metros</span>
            <h6 class="text-highlight font-bold">Copa</h6>
          </div>
          <div class="flex items-center justify-center gap-2"><span class="text-sm text-foreground">Elegante</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Amplio</span><i class="bx bxs-leaf bx-xs text-highlight"></i><span class="text-sm text-foreground">Sofisticado</span>
          </div>
        </div>
      </div><a class="py-2 font-bold text-highlight text-md text-center select-none hover:text-dark-highlight/90 transition-colors ease-in" href="#">Ver más Modelos</a>
    </div>
    <!-- Models End-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-3xl bg-highlight bg-center bg-no-repeat bg-cover container">
        <div class="text-background flex flex-col items-center gap-6 md:flex-row"><img class="w-full max-w-sm  rounded-4xl " src="/assets/model-placeholder.jpg">
          <div class="flex flex-col gap-7 items-start">
            <div class="flex flex-col gap-2 text-left">
              <h2 class="text-sm text-secondary">Cuidamos lo que más importa… tu familia</h2>
              <h1 class="text-5xl font-bold text-background">Sobre Nosotros</h1>
            </div>
            <p>En Corteza, transformamos espacios en hogares con propósito. Combinamos calidad, servicio y protección para construir Tiny Houses cálidas, seguras y elegantes. Más que una empresa, somos un movimiento que genera oportunidades para jóvenes y apoya comunidades.</p><a class="py-2 font-bold text-background text-md text-center select-none hover:text-background/90 transition-colors ease-in" href="#">Leer Más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-3xl bg-secondary-highlight bg-center bg-no-repeat bg-cover container">
        <div class="flex items-center justify-around"><span class="text-sm font-bold sm:text-xl text-background">Servicio</span><i class="bx bxs-leaf text-base sm:text-4xl text-light-highlight"></i><span class="text-sm font-bold sm:text-xl text-background">Calidad</span><i class="bx bxs-leaf text-base sm:text-4xl text-light-highlight"></i><span class="text-sm font-bold sm:text-xl text-background">Protección</span>
        </div>
      </div>
    </div>
    <div class="p-6 py-8 flex flex-col gap-6 items-center container">
      <div class="flex items-center gap-6 flex-col md:flex-row">
        <div class="w-full min-w-72 max-w-sm flex flex-col gap-6 items-center px-4 py-16 rounded-4xl bg-floema-secondary bg-center bg-no-repeat bg-cover">
          <div class="flex flex-col gap-2 text-center">
            <h1 class="text-5xl font-bold text-background">Floema</h1>
            <h2 class="text-sm text-secondary">Los Materiales que Nutren tu Hogar</h2>
          </div><a class="px-3 py-2 bg-highlight rounded-2xl font-bold text-background text-md text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in" href="#">Cotizar</a>
        </div>
        <div class="flex flex-col gap-6">
          <div>
            <h2 class="text-2xl text-highlight font-bold">¿Necesitas materiales para tu proyecto?</h2>
            <p class="text-sm text-tertiary">En Corteza, nos inspiramos en el floema, el tejido que transporta nutrientes en los árboles, para ofrecerte materiales de la más alta calidad que nutren y fortalecen tu hogar. Desde maderas hasta accesorios y herramientas, cada producto está seleccionado para garantizar durabilidad, funcionalidad y belleza.</p>
          </div>
          <div class="flex flex-col gap-2">
            <h3 class="text-xl font-bold text-center">Proveedores de Materiales</h3>
            <div class="flex flex-wrap gap-2 content-center justify-around">
              <div class="flex flex-col gap-4 items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-tree-alt bx-lg text-background"></i>
                <h4 class="text-xl font-bold text-background">Maderas</h4>
                <p class="text-xs text-secondary">Durables y de alta calidad</p>
              </div>
              <div class="flex flex-col gap-4 items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-basket bx-lg text-background"></i>
                <h4 class="text-xl font-bold text-background">Accesorios</h4>
                <p class="text-xs text-secondary">Funcionales y estéticos</p>
              </div>
              <div class="flex flex-col gap-4 items-center max-w-60 rounded-4xl py-6 px-6 bg-highlight text-center"><i class="bx bxs-wrench bx-lg text-background"></i>
                <h4 class="text-xl font-bold text-background">Herramientas</h4>
                <p class="text-xs text-secondary">Confiables y eficientes</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer class="w-full">
      <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-background bg-center bg-no-repeat bg-cover">
        <div class="px-6 md:px-8 py-10 sm:rounded-3xl bg-foreground bg-center bg-no-repeat bg-cover container">
          <div class="flex flex-col gap-8 text-background">
            <div class="flex justify-between items-center flex-col gap-4 md:flex-row">
              <div>
                <div class="flex gap-2 items-center"><i class="bx bxs-leaf bx-lg text-highlight"></i>
                  <h1 class="text-5xl font-bold font-title">Corteza</h1>
                </div>
                <p class="text-tertiary">Proveemos lo necesario para proteger lo más importante</p>
              </div><a class="py-2 font-bold text-background text-md text-center select-none hover:text-background/90 transition-colors ease-in" href="#">Construyamos juntos el hogar que tu familia merece</a>
            </div>
            <div class="flex justify-between items-center flex-col gap-4 md:flex-row">
              <div class="flex gap-2 items-center"> <i class="bx bxl-facebook-circle bx-md"></i><i class="bx bxl-instagram-alt bx-md"></i><i class="bx bxl-whatsapp bx-md"></i></div>
              <div class="flex gap-2 items-center"><i class="bx bx-envelope bx-sm"></i><span class="font-bold">cortezacym@gmail.com</span></div>
            </div>
          </div>
        </div>
      </div>
  </footer>
</html>
