<div>
    @if ($lenguaje == 'esp')
        <h2 class="text-xl font-bold">Crea la Casa de tus Sueños</h2>
    @else
        <h2 class="text-xl font-bold">Create the House of your Dreams</h2>
    @endif

    <div class="divide-y-2 divide-dashed divide-light-highlight/50">
        @foreach ($accesoriosPorCategoria as $categoria => $accesorios)
            <div class="relative py-4 flex flex-col gap-2" x-data="{ open: false }">
                <h3 class="text-foreground-secondary">{{ $categoria }}</h3>
                <div class="relative flex flex-col gap-2" x-show="open" x-collapse.min.250px>
                    <div class="absolute w-full h-full pb-2 bottom-0 left-0 bg-gradient-to-t from-background from-3% to-transparent to-40% pointer-events-none"
                        x-on:click="open = !open" x-show="!open">
                    </div>
                    @foreach ($accesorios as $accesorio)
                        <label
                            class="flex gap-2 items-center justify-between px-2 md:px-6 py-4 rounded-2xl border-2 border-secondary bg-background has-[:checked]:bg-highlight has-[:checked]:text-background has-[:checked]:border-highlight transition-colors cursor-pointer">
                            <div class="flex gap-2 items-center">
                                <div>
                                    <input type="checkbox" wire:model.live="accesoriosSeleccionados"
                                        value="{{ (int) $accesorio['id'] }}" class="hidden peer">
                                    <div class="group w-4 h-4 p-2 border-2 border-secondary rounded-md flex items-center justify-center peer-checked:border-secondary">
                                        <i class="bx bx-check bx-xs !hidden group-peer-checked:!block"></i>
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
                <a class="self-center z-10 text-foreground-secondary hover:text-tertiary transition-colors cursor-pointer"
                    x-on:click="open = !open"
                    x-bind:class="open ? '' : 'absolute bottom-4 left-1/2 transform -translate-x-1/2'"
                    x-text="open ? 'Ver Menos' : 'Ver Más'">
                </a>
            </div>
        @endforeach
    </div>
    <div
        class="w-full p-4 md:p-6 flex flex-col gap-4 items-stretch sticky bottom-4 rounded-2xl bg-secondary-highlight text-background z-10">
        <h3 class="text-2xl font-semibold text-right">Total: ${{ number_format($total, 2) }}</h3>
        <button
            class="px-3 py-2 bg-highlight rounded-2xl font-bold text-background text-center select-none hover:bg-dark-highlight/90 transition-colors ease-in">Realizar
            Cotización</button>
    </div>
