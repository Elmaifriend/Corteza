<div x-data="{ showForm: false }">
    @if ($lenguaje == 'esp')
        <h2 class="text-xl font-bold">Crea la Casa de tus Sueños</h2>
    @else
        <h2 class="text-xl font-bold">Create the House of your Dreams</h2>
    @endif

    <div class="divide-light-highlight/50 relative mb-32 divide-y-2 divide-dashed lg:mb-0">
        @foreach ($accesoriosPorCategoria as $categoria => $accesorios)
            <div class="relative flex flex-col gap-2 py-4" x-data="{ open: false }">
                <h3 class="text-foreground-secondary">{{ $categoria }}</h3>
                <div class="relative flex flex-col gap-2" x-show="open" x-collapse.min.250px>
                    <div class="from-background from-3% pointer-events-none absolute bottom-0 left-0 h-full w-full bg-gradient-to-t to-transparent to-40% pb-2"
                        x-on:click="open = !open" x-show="!open">
                    </div>
                    @foreach ($accesorios as $accesorio)
                        <label
                            class="border-secondary bg-background has-[:checked]:bg-highlight has-[:checked]:text-background has-[:checked]:border-highlight flex cursor-pointer items-center justify-between gap-2 rounded-2xl border-2 px-2 py-4 transition-colors md:px-6">
                            <div class="flex items-center gap-2">
                                <div>
                                    <input type="checkbox" wire:model.live="accesoriosSeleccionados"
                                        value="{{ (int) $accesorio['id'] }}" class="peer hidden">
                                    <div
                                        class="border-secondary peer-checked:border-secondary group flex h-4 w-4 items-center justify-center rounded-md border-2 p-2">
                                        <i class="bx bx-check bx-xs group-peer-checked:!block !hidden"></i>
                                    </div>
                                </div>

                                <span class="select-none font-bold">
                                    @if ($lenguaje == 'esp')
                                        {{ $accesorio['nombre'] }}
                                    @else
                                        {{ $accesorio['name'] }}
                                    @endif
                                </span>
                            </div>
                            <span class="select-none">
                                ${{ number_format($accesorio['price'], 2) }}
                            </span>
                        </label>
                    @endforeach
                </div>
                @if ($lenguaje == 'esp')
                    <a class="text-foreground-secondary hover:text-tertiary z-10 cursor-pointer self-center transition-colors"
                        x-on:click="open = !open"
                        x-bind:class="open ? '' : 'absolute bottom-4 left-1/2 transform -translate-x-1/2'"
                        x-text="open ? 'Ver menos' : 'Ver más'">
                    </a>
                @else
                    <a class="text-foreground-secondary hover:text-tertiary z-10 cursor-pointer self-center transition-colors"
                        x-on:click="open = !open"
                        x-bind:class="open ? '' : 'absolute bottom-4 left-1/2 transform -translate-x-1/2'"
                        x-text="open ? 'See less' : 'See more'">
                    </a>
                @endif
            </div>
        @endforeach
    </div>
    <div
        class="lg:translate-none container fixed bottom-4 left-1/2 z-10 mx-auto w-full -translate-x-1/2 px-4 lg:sticky lg:bottom-0 lg:left-0 lg:px-0">
        <div class="bg-secondary-highlight text-background flex flex-col items-stretch gap-4 rounded-2xl p-4 md:p-6">
            <h3 class="text-right text-2xl font-semibold">
                Total: ${{ number_format($total, 2) }}
            </h3>
            <button x-on:click="showForm = !showForm"
                class="bg-highlight text-background hover:bg-dark-highlight/90 select-none rounded-2xl px-3 py-2 text-center font-bold transition-colors ease-in">
                @if ($lenguaje == 'esp')
                    Realizar Cotización
                @else
                    Get Quote
                @endif
            </button>
        </div>
    </div>

    <div x-data="{ readTermsAndConditions: false }" x-cloak x-show="showForm" x-transition class="fixed inset-0 z-50"
        x-trap.noscroll="showForm">
        <div x-on:click="showForm = false" class="fixed inset-0 bg-black/80"></div>

        <div class="fixed left-1/2 top-1/2 w-fit -translate-x-1/2 -translate-y-1/2">
            <div class="overflow-hidden rounded-2xl">
                <form wire:submit.prevent="guardarCotizacion" x-data="{ formStep: 0 }"
                    class="bg-background container h-full max-h-[90vh] w-full overflow-y-auto rounded-2xl px-6 py-8 lg:px-16">
                    <div x-show="formStep == 0" x-transition class="flex flex-col gap-6">
                        <h1 class="text-highlight text-4xl font-bold">
                            @if ($lenguaje == 'esp')
                                Cotiza tu TinyHouse
                            @else
                                Get your TinyHouse
                            @endif
                        </h1>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="name">Nombre</label>
                                <input wire:model="nombre" required 
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="name" placeholder="Ingresa tu Nombre Completo" />
                            @else
                                <label for="name">Name</label>
                                <input wire:model="nombre" required 
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="name" placeholder="Enter your Full Name" />
                            @endif
                        </fieldset>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="mail">Correo</label>
                                <input wire:model="correo"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="mail" placeholder="Ingresa tu Correo Electrónico" />
                            @else
                                <label for="mail">Email</label>
                                <input wire:model="correo"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="mail" placeholder="Enter your Email Address" />
                            @endif
                        </fieldset>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="phone">Teléfono</label>
                                <input wire:model="telefono" required 
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="phone" placeholder="Ingresa tu Número de Teléfono" />
                            @else
                                <label for="phone">Phone Number</label>
                                <input wire:model="telefono" required 
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="phone" placeholder="Enter your Phone Number" />
                            @endif
                        </fieldset>
                        <fieldset class="flex flex-col gap-1">
                          @if ($lenguaje == 'esp')
                              <label for="callTime">Hora de llamada preferida</label>
                              <input
                                  class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                  type="datetime-local" id="callTime"/>
                          @else
                              <label for="callTime">Preferred call time</label>
                              <input
                                  class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                  type="datetime-local" id="callTime"/>
                          @endif
                      </fieldset>
                        <fieldset class="flex items-center gap-1">
                            @if ($lenguaje == 'esp')
                                <input type="checkbox" class="accent-highlight cursor-pointer" id="whatsapp">
                                <label for="whatsapp">¿Tiene WhatsApp?</label>
                            @else
                                <input type="checkbox" class="accent-highlight cursor-pointer" id="whatsapp">
                                <label for="whatsapp">Do you have WhatsApp?</label>
                            @endif
                        </fieldset>
                        <div class="my-2 border-t border-gray-300"></div>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="city">Ciudad</label>
                                <input wire:model="ciudad"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="city"
                                    placeholder="Ingresa la ciudad donde se realizará la entrega" />
                            @else
                                <label for="city">City</label>
                                <input wire:model="ciudad"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="city" placeholder="Enter the city of delivery" />
                            @endif
                        </fieldset>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="subdivision">Fraccionamiento</label>
                                <input wire:model="fraccionamiento"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="subdivision"
                                    placeholder="Ingresa el fraccionamiento o colonia de entrega" />
                            @else
                                <label for="subdivision">Neighborhood</label>
                                <input wire:model="fraccionamiento"
                                    class="bg-secondary focus:ring-highlight text-tertiary appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="text" id="subdivision"
                                    placeholder="Enter the neighborhood of delivery" />
                            @endif
                        </fieldset>
                        <div class="my-2 border-t border-gray-300"></div>
                        <fieldset class="flex flex-col gap-1">
                            @if ($lenguaje == 'esp')
                                <label for="message">Notas</label>
                                <textarea wire:model="notas"
                                    class="bg-secondary focus:ring-highlight text-tertiary resize-none appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="textarea" rows="5" id="message" placeholder="Notas"></textarea>
                            @else
                                <label for="message">Notes</label>
                                <textarea wire:model="notas"
                                    class="bg-secondary focus:ring-highlight text-tertiary resize-none appearance-none rounded-2xl p-4 text-sm focus:outline-none focus:ring-2"
                                    type="textarea" rows="5" id="message" placeholder="Notes"></textarea>
                            @endif
                        </fieldset>
                        <fieldset class="flex items-center gap-1">
                            @if ($lenguaje == 'esp')
                                <input wire:model="readTermsAndConditions"
                                    x-on:click="readTermsAndConditions = !readTermsAndConditions" type="checkbox"
                                    class="accent-highlight cursor-pointer" id="terms">
                                <label for="terms">He leido las
                                    Pólizas de Consideración para adquirir mi Tiny</label>
                            @else
                                <input wire:model="readTermsAndConditions"
                                    x-on:click="readTermsAndConditions = !readTermsAndConditions" type="checkbox"
                                    class="accent-highlight cursor-pointer" id="terms">
                                <label for="terms">I have read the Policies of Consideration to acquire my
                                    Tiny</label>
                            @endif
                        </fieldset>
                        <div class="mt-4 flex justify-end">
                            <button x-on:click="formStep++" x-bind:disabled="!readTermsAndConditions" type="button"
                                class="bg-highlight text-background hover:bg-dark-highlight/90 disabled:bg-secondary disabled:text-foreground-secondary flex cursor-pointer select-none items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-all ease-in disabled:cursor-default sm:px-6 sm:text-lg">
                                @if ($lenguaje == 'esp')
                                    Realizar Cotización
                                @else
                                    Get Quote
                                @endif
                            </button>
                        </div>
                    </div>
                    <div x-show="formStep == 1" x-transition class="flex flex-col gap-6">
                        <h1 class="text-highlight text-4xl font-bold">
                            @if ($lenguaje == 'esp')
                                Estas a un paso de obtener la Tiny House de tus Sueños
                            @else
                                You are one step away from getting the Tiny House of your Dreams
                            @endif
                        </h1>
                        <p>
                            @if ($lenguaje == 'esp')
                                Muchas Gracias por enviar tu aplicación, en las próximas 48 horas uno de nuestros
                                operadores se pondrá en contacto contigo para agendar una cita, en caso de que no se
                                contacten por favor cominicate directamente a nuestro correo:
                            @else
                                Thank you very much for sending your application, in the next 48 hours one of our
                                operators will contact you to schedule an appointment, in case they do not contact you
                                by please contact us directly to our email:
                            @endif
                            <span class="text-highlight font-bold">cortezacym@gmail.com</span>
                        </p>
                        <div class="mt-4 flex justify-end">
                            <button x-bind:disabled="!readTermsAndConditions" x-on:click="showForm = !showForm"
                                class="bg-highlight text-background hover:bg-dark-highlight/90 disabled:bg-secondary disabled:text-foreground-secondary flex cursor-pointer select-none items-center justify-center gap-1 rounded-2xl px-4 py-3 text-center font-bold transition-all ease-in disabled:cursor-default sm:px-6 sm:text-lg">
                                @if ($lenguaje == 'esp')
                                    Aceptar
                                @else
                                    Accept
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
