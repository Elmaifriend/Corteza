<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Quote;

class Cotizador extends Component
{
    public float $precioBase; // Precio base de la casa
    public array $accesorios = []; // Lista de accesorios
    public array $accesoriosPorCategoria = [];
    public array $accesoriosSeleccionados = []; // Accesorios seleccionados
    public float $total = 0; // Total calculado
    public string $lenguaje;

    public string $nombre = '';
    public string $correo = '';
    public string $telefono = '';
    public string $ciudad = '';
    public string $fraccionamiento = '';
    public string $notas = '';
    public bool $readTermsAndConditions = false;

    public function mount(float $precioBase, array $accesorios, string $lenguaje): void
    {
        $this->precioBase = $precioBase;
        $this->accesorios = $accesorios;
        $this->lenguaje = $lenguaje;
        $this->agruparPorCategoria();
        $this->calcularTotal(); // Calcular el total inicial
    }

    // Método que se ejecuta cuando se actualiza la selección de accesorios
    public function updatedAccesoriosSeleccionados(): void
    {
        $this->calcularTotal();
    }

    // Método para calcular el total
    private function calcularTotal(): void
    {
        $this->total = $this->precioBase;

        foreach ($this->accesoriosSeleccionados as $accesorioId) {
            $accesorio = collect($this->accesorios)->firstWhere('id', $accesorioId);
            if ($accesorio) {
                $this->total += $accesorio['price'];
            }
        }
    }

    private function agruparPorCategoria(): void {
        foreach ( $this->accesorios as $accesorio ){
            $this->accesoriosPorCategoria[$accesorio["category"] ][] = $accesorio;
        }
    }

    // Método para renderizar la vista
    public function render()
    {
        return view('livewire.cotizador');
    }

    public function guardarCotizacion(){
        $this->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:50',
            'ciudad' => 'required|string|max:100',
            'readTermsAndConditions' => 'accepted',
        ]);

        $descripcion = $this->generarDescripcion();

        Quote::create([
            'name' => $this->nombre,
            'email' => $this->correo,
            'cell_phone' => $this->telefono,
            'city' => $this->ciudad,
            'neighborhood' => $this->fraccionamiento,
            'description' => $descripcion
        ]);
    }

    public function generarDescripcion(){

        $descripcion = "Lista de accesorios\n";

        foreach( $this->accesoriosSeleccionados as $accesorio ){
            foreach( $this->accesorios as $accesorioBase ){
                if( $accesorioBase["id"] == $accesorio){
                    $descripcion .= "\n-" . $accesorioBase["nombre"]    ;
                }
            }
        }

        $descripcion .= "\n\nNotas:\n" . $this->notas;

        $descripcion .= "\n\n Total: " . $this ->total;

        return $descripcion;
    }
}
