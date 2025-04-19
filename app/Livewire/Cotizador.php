<?php

namespace App\Livewire;

use App\Mail\CotizacionMail;
use Livewire\Component;
use App\Models\Quote;
use app\Models\HouseModel;
use App\Mail\QuoteMail;
use Illuminate\Support\Facades\Mail;
use DateTime;

class Cotizador extends Component
{
    public float $total = 0;
    public float $precioBase;
    public array $accesorios = [];
    public array $accesoriosPorCategoria = [];
    public array $accesoriosSeleccionados = [];
    public string $lenguaje;
    public HouseModel $modeloBase;
    public string $edicion = "Standard";

    public string $nombre = '';
    public string $correo = '';
    public string $telefono = '';
    public $tieneWA = "";
    public string $ciudad = '';
    public string $fraccionamiento = '';
    public string $notas = '';
    public DateTime $horaDeContacto;
    public bool $readTermsAndConditions = false;

    public function mount($modeloBase, array $accesorios, string $lenguaje): void
    {
        $this->horaDeContacto = new DateTime( "now" );
        $this->modeloBase = $modeloBase;
        $this->precioBase = $modeloBase->estandar;
        $this->accesorios = $accesorios;
        $this->lenguaje = $lenguaje;
        $this->agruparPorCategoria();
        $this->calcularTotal();
    }

    public function updatedAccesoriosSeleccionados(): void
    {
        $this->calcularTotal();
    }

    public function updatedPrecioBase(){
        $this->calcularTotal();
    }

    public function updatedEdicion(){
        $this->calcularTotal();
    }

    private function calcularTotal(): void
    {
        $this->total = $this->econtrarPrecioEdicion($this->modeloBase, $this->edicion);

        foreach ($this->accesoriosSeleccionados as $accesorioId) {
            $accesorio = collect($this->accesorios)->firstWhere('id', $accesorioId);
            if ($accesorio) {
                $this->total += $accesorio['price'];
            }
        }
    }

    private function agruparPorCategoria(): void {
        if( $this->lenguaje === "esp" ){
            foreach ( $this->accesorios as $accesorio ){
                $this->accesoriosPorCategoria[ $accesorio["categoria"] ][] = $accesorio;
            }
        } else if( $this->lenguaje === "eng") {
            foreach ( $this->accesorios as $accesorio ){
                $this->accesoriosPorCategoria[ $accesorio["category"] ][] = $accesorio;
            }
        }
    }

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
        $tieneWhatsApp = $this->verificarTieneWA();

        $quote = Quote::create([
            'name' => $this->nombre,
            'email' => $this->correo,
            'cell_phone' => $this->telefono,
            "has_wa" => $tieneWhatsApp,
            "scheduled" => $this->horaDeContacto,
            'city' => $this->ciudad,
            'neighborhood' => $this->fraccionamiento,
            'description' => $descripcion,
            "model" => $this->modeloBase->name,
        ]);

        $this->sendMail($quote);
        return redirect('/tiny-houses');
    }

    public function generarDescripcion(){
        $descripcion = $this->modeloBase->name . " - " . $this->edicion;
        $descripcion .= "\nLista de accesorios\n";

        foreach( $this->accesoriosSeleccionados as $accesorio ){
            foreach( $this->accesorios as $accesorioBase ){
                if( $accesorioBase["id"] == $accesorio){
                    $descripcion .= "\n-" . $accesorioBase["nombre"]    ;
                }
            }
        }

        $descripcion .= "\n\nNotas:\n" . $this->notas;
        $descripcion .= "\n\nTotal: " . $this ->total;

        return $descripcion;
    }

    public function verificarTieneWA(){
        if( $this->tieneWA ){
            return "Si";
        }
        return "No";
    }

    public function sendMail( $quote ){
        if( $this->lenguaje == "esp"){
            Mail::to($quote->email)->send(new CotizacionMail($quote))
                ->cc(env("MAIL_TO"));
        } else if( $this->lenguaje == "eng"){
            Mail::to($quote->email)->send(new QuoteMail($quote))
                ->cc(env("MAIL_TO"));
        }
    }

    public function econtrarPrecioEdicion( HouseModel $modeloBase, string $edicion ){
        switch( $edicion ){
            case "Standard":
                $precio = $modeloBase->estandar;
                break;

            case "Plus":
                $precio = $modeloBase->plus;
                break;

            case "Delux";
                $precio = $modeloBase->delux;
                break;

            default:
                $precio = 0;
                break;
        }
        return $precio;
    }
}
