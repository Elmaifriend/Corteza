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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Floema</title>
</head>

<body class="flex flex-col items-center">
    <div class="container grid h-dvh grid-rows-[80px_1fr]">
        <!-- Navigation Begin-->
        <nav class="container relative z-10 flex w-full select-none flex-row items-center justify-between p-4 lg:grid lg:grid-cols-[160px_1fr_160px]"
            x-data="{ open: false }" x-on:click.outside="open = false">
      <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a>
            <ul class="lg:translate-0 mdlg!bg-none bg-background text-secondary-highlight divide-secondary-highlight/10 absolute left-1/2 top-[120%] z-10 flex w-11/12 -translate-x-1/2 flex-col divide-y-2 divide-dashed rounded-2xl p-4 md:top-[150%] lg:static lg:!flex lg:w-full lg:flex-row lg:divide-none lg:p-0"
                x-show="open" x-cloak="" x-transition="">
                <li class="block py-3 lg:hidden">
            <a class="font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a>
                </li>
                <div class="w-full items-center justify-center gap-8 lg:flex">
                    <li class="group relative py-3 lg:p-0" x-data="{ open: false }" x-on:click="open = !open"
                        x-on:mouseover="if(window.innerWidth &gt;= 768) open = true"
                        x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                        <div class="flex cursor-pointer items-center justify-between"><a
                                href="{{ route('home') }}">Home</a><i
                                class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in"
                                x-bind:class="{ 'transform rotate-180': open }"></i></div>
                        <ul class="lg:!bg-background divide-secondary-highlight/10 left-0 top-full mt-2 w-full divide-y-2 divide-dashed pl-4 lg:absolute lg:m-0 lg:w-max lg:rounded-2xl lg:p-4"
                            x-show="open" x-cloak="" x-collapse="">
                            <li class="py-3"><a href="{{ route('en_corteza') }}">What is Corteza</a></li>
                            <li class="py-3"><a href="{{ route('functions') }}">6 Functions of Corteza</a></li>
                        </ul>
                    </li>
                    <li class="py-3"><a href="{{ route('history') }}">History</a></li>
                    <li class="group relative py-3 lg:p-0" x-data="{ open: false }" x-on:click="open = !open"
                        x-on:mouseover="if(window.innerWidth &gt;= 768) open = true"
                        x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
                        <div class="flex cursor-pointer items-center justify-between"><a
                                href="{{ route('en_tiny-houses') }}">Tiny Houses</a><i
                                class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in"
                                x-bind:class="{ 'transform rotate-180': open }"></i></div>
                        <ul class="lg:!bg-background divide-secondary-highlight/10 left-0 top-full mt-2 w-full divide-y-2 divide-dashed pl-4 lg:absolute lg:m-0 lg:w-max lg:rounded-2xl lg:p-4"
                            x-show="open" x-cloak="" x-collapse="">
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
            <button
                class="bx bx-menu bx-md hover:text-foreground/60 cursor-pointer transition-colors ease-in lg:!hidden"
                x-on:click="open = !open"></button>
        </nav>
        <!-- Navigation End-->
        <!-- Hero Image Begin-->
        <div class="bg-background h-full w-full p-0 md:py-6">
            <div class="text-background bg-floema relative h-full w-full bg-cover bg-center sm:rounded-3xl sm:bg-left">
                <div
                    class="flex h-full w-full flex-col items-center justify-center gap-4 px-6 py-10 text-center transition-all sm:items-start sm:rounded-3xl sm:pl-4 sm:text-left md:px-8">
                    <h1 class="font-title text-4xl font-bold sm:text-8xl">Floema</h1>
                    <p class="text-secondary px-2 text-center text-sm sm:text-lg">The nutrients your project needs to grow</p>
                </div>
            </div>
        </div>
        <!-- Hero Image End-->
    </div>
    <div
        class="bg-secondary flex w-full flex-col flex-wrap content-center items-stretch bg-cover bg-center bg-no-repeat p-0 py-8 md:p-6">
        <div class="sm:rounded-4xl bg-background container h-full bg-cover bg-center bg-no-repeat px-6 py-10 md:px-8">
            <div class="flex flex-col items-center gap-6">
                <div class="flex flex-col gap-2 text-center">
                    <h1 class="text-highlight text-3xl font-bold sm:text-5xl">What is Floema?</h1>
                    <h2 class="text-foreground-secondary text-lg"></h2>
                </div>
                <div class="text-tertiary flex max-w-2xl flex-col gap-2 text-center">
                    <p>In botany, "phloem" is the conductive tissue responsible for transporting organic and inorganic nutrients, produced by the photosynthetic and autotrophic aerial part</p>
                    <p>The phloem carries out the bulk transport of water and carbohydrates from the sites of synthesis; that is, from the source organs to the sink or demand organs, providing what is needed for the fulfillment of their purpose.</p>
                </div>
            </div>
            <div class="text-highlight flex w-full justify-center gap-2 py-4 text-center text-2xl font-bold"><i
                    class="bx bxs-quote-alt-left"></i>
                <p>Our goal is to provide the best Materials (Nutrients) for the fulfillment of your dreams</p><i class="bx bxs-quote-alt-right"></i>
            </div>
        </div>
    </div>
    <div
        class="bg-background flex w-full flex-col flex-wrap content-center items-stretch bg-cover bg-center bg-no-repeat p-0 py-8 md:p-6">
        <div class="sm:rounded-4xl bg-highlight container h-full bg-cover bg-center bg-no-repeat px-6 py-10 md:px-8">
            <div class="flex items-center justify-around gap-4"><span
                    class="text-background text-sm font-bold sm:text-xl">Service</span><i
                    class="bx bxs-leaf text-background text-base sm:text-4xl"></i><span
                    class="text-background text-sm font-bold sm:text-xl">Quality</span><i
                    class="bx bxs-leaf text-background text-base sm:text-4xl"></i><span
                    class="text-background text-sm font-bold sm:text-xl">Warranty</span>
            </div>
        </div>
    </div>
    <div class="container bg-cover bg-center bg-no-repeat p-6 py-8">
        <div class="flex flex-col items-center gap-12" id="catalog">
            <div>
                <div class="flex flex-col gap-2 text-center">
                    <h1 class="text-highlight text-3xl font-bold sm:text-5xl">Our Products</h1>
                    <h2 class="text-foreground-secondary text-lg"></h2>
                </div>
                <p class="text-foreground-secondary text-center">We have a wide variety of construction materials and tools, adapted to your budget and needs</p>
            </div>
            <div class="flex w-full flex-col gap-12" x-data="enCatalogData">
                <template x-for="(section, sectionIndex) in sections" x-bind:key="sectionIndex">
                    <template x-if="currentSection === sectionIndex" x-transition="">
                        <div class="flex flex-col gap-14">
                            <div class="border-highlight border-y-2 border-dashed py-4">
                                <h2 class="text-highlight text-4xl font-bold" x-text="section.title"></h2>
                                <p class="text-foreground-secondary" x-text="section.description"></p>
                            </div>
                            <div class="flex flex-wrap justify-center gap-4">
                                <template x-for="product in section.products" x-bind:key="product.name">
                                    <div class="flex w-full max-w-sm flex-col gap-4">
                                        <div class="h-[250px] w-full rounded-2xl bg-cover bg-center"
                                        x-bind:style="{ 'background-image': `url(/images/corteza-products/${product.image})` }"
                                        x-bind:alt="product.name"></div>
                                        <div>
                                            <h3 class="text-2xl font-bold" x-text="product.name"></h3>
                                            <p class="text-tertiary" x-text="product.description"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </template>
                <div class="flex justify-center gap-4"><a
                        class="bg-highlight text-background hover:bg-dark-highlight/90 flex select-none flex-row-reverse items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-colors ease-in sm:px-6 sm:text-lg"
                        href="#catalog" x-on:click="currentSection = currentSection - 1"
                        x-show="currentSection &gt; 0">Previous<i class="bx bx-left-arrow-alt"></i></a><a
                        class="bg-highlight text-background hover:bg-dark-highlight/90 flex select-none items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-colors ease-in sm:px-6 sm:text-lg"
                        href="#catalog" x-on:click="currentSection = currentSection + 1"
                        x-show="currentSection &lt; sections.length - 1">Next<i
                            class="bx bx-right-arrow-alt"></i></a>
                </div>
                <div class="flex justify-center">
                    <form x-data="{ formStep: 0 }" class="align-center flex w-full max-w-4xl flex-col gap-6" action="{{ route("floema_form_en") }}" method="POST">
                        @csrf
                        <input type="hidden" name="language" value="English">
                        <div x-show="formStep == 0" x-transition class="flex flex-col gap-6">
                            <h1 class="text-highlight text-4xl font-bold">Get a Quote for Your Products</h1>
                            <fieldset class="flex flex-col gap-1">
                                <label for="name">Name</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="name" name="name" placeholder="Enter your Full Name" />
                            </fieldset>
                            <fieldset class="flex flex-col gap-1">
                                <label for="mail">Email</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="mail" name="mail" placeholder="Enter your Email Address" />
                            </fieldset>
                            <fieldset class="flex flex-col gap-1">
                                <label for="phone">Phone</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="phone" name="phone" placeholder="Enter your Phone Number" />
                            </fieldset>
                            <div class="my-2 border-t border-gray-300"></div>
                            <fieldset class="flex flex-col gap-1">
                                <label for="materials">Materials to Quote</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="materials" name="materiales"
                                    placeholder="Select the materials you need" />
                            </fieldset>
                            <fieldset class="flex flex-col gap-1">
                                <label for="city">Delivery City</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="city" name="city"
                                    placeholder="Enter the city where delivery will be made" />
                            </fieldset>
                            <div class="my-2 border-t border-gray-300"></div>
                            <fieldset class="flex flex-col gap-1">
                                <label for="subdivision">Subdivision</label>
                                <input required
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="subdivision" name="subdivision"
                                    placeholder="Enter the subdivision or neighborhood for delivery" />
                            </fieldset>
                            <fieldset class="flex flex-col gap-1">
                                <label for="message">How can we help you?</label>
                                <textarea
                                    class="bg-secondary focus:ring-highlight text-tertiary resize-none appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="textarea" rows="5" id="message" name="message" placeholder="Tell us how we can help you"></textarea>
                            </fieldset>
                            <div class="mt-4 flex justify-end">
                                <button x-on:click="formStep++" type="button"
                                    class="bg-highlight text-background hover:bg-dark-highlight/90 flex cursor-pointer select-none items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-all ease-in sm:px-6 sm:text-lg">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                        <div x-show="formStep == 1" x-transition class="flex flex-col gap-6">
                            <h1 class="text-highlight text-4xl font-bold">Thank You for Submitting Your Application</h1>
                            <p>Within the next 48 hours one of our
                                operators
                                will contact you to schedule an appointment, if they don't contact you please
                                communicate directly to our email: <span
                                    class="text-highlight font-bold">cortezacym@gmail.com</span></p>
                            <div class="mt-4 flex justify-end">
                                <button x-on:click="formStep--" type="submit"
                                    class="bg-highlight text-background hover:bg-dark-highlight/90 flex cursor-pointer select-none items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-all ease-in sm:px-6 sm:text-lg">
                                    Accept
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Begin-->
    <footer class="w-full">
        <div
            class="bg-background flex w-full flex-col flex-wrap content-center items-stretch bg-cover bg-center bg-no-repeat p-0 py-0 sm:py-6 md:p-6">
            <div
                class="sm:rounded-4xl bg-foreground container h-full bg-cover bg-center bg-no-repeat px-6 py-10 md:px-8">
                <div class="text-background flex flex-col gap-8">
                    <div class="flex flex-col items-center justify-between gap-4 md:flex-row"><img class="max-w-62"
                            src="{{ Vite::asset('resources/images/corteza-white.png') }}" alt="Corteza Logo">
                        <div class="flex flex-col items-center gap-4">
                            <div class="flex items-center gap-2"><i class="bx bx-envelope bx-sm"></i><span
                                    class="font-bold">cortezacym@gmail.com</span></div>
                            <p class="text-tertiary">We provide what's necessary to protect what's most important</p>
                            <div class="flex items-center gap-2"> <i
                                    class="bx bxl-facebook-circle bx-md hover:text-light-highlight cursor-pointer transition-colors"></i><i
                                    class="bx bxl-instagram-alt bx-md hover:text-light-highlight cursor-pointer transition-colors"></i><i
                                    class="bx bxl-whatsapp bx-md hover:text-light-highlight cursor-pointer transition-colors"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->
</body>

</html>
