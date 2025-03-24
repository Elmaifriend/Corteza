<?php

namespace App\Livewire;

use Livewire\Component;

class Cotizador extends Component
{
    public float $precioBase; // Precio base de la casa
    public array $accesorios = []; // Lista de accesorios
    public array $accesoriosPorCategoria = [];
    public array $accesoriosSeleccionados = []; // Accesorios seleccionados
    public float $total = 0; // Total calculado
    public string $lenguaje;

    // Método para inicializar el componente
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
}
