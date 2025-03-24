<div>
    @if($lenguaje == "esp")
        <h2>Cotizador</h2>
    @else
        <h2>Cotizator</h2>
    @endif

    @if($lenguaje == "esp")
        <p>Precio base de la casa: ${{ number_format($precioBase, 2) }}</p>
    @else
        <p>House base price: ${{ number_format($precioBase, 2) }}</p>
    @endif

    @if($lenguaje == "esp")
        <h3>Accesorios</h3>
    @else
        <h3>Accesories</h3>
    @endif


    @foreach($accesoriosPorCategoria as $categoria => $accesorios )
        <p>{{ $categoria }}</p>
        @foreach ( $accesorios as $accesorio )
            <label>
                <input type="checkbox"
                    wire:model.live="accesoriosSeleccionados"
                    value="{{ (int) $accesorio['id'] }}">
                    @if($lenguaje == "esp")
                        {{ $accesorio['nombre'] }} - ${{ number_format($accesorio['price'], 2) }}
                    @else
                        {{ $accesorio['name'] }} - ${{ number_format($accesorio['price'], 2) }}
                    @endif
            </label>
            <br>
        @endforeach
    @endforeach
    <h3>Total: ${{ number_format($total, 2) }}</h3>
</div>
