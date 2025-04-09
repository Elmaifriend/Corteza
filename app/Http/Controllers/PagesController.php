<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use App\Models\HouseModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{
    public function inicio(){
        return view('esp.inicio');
    }

    public function corteza() {
        return view('esp.corteza');
    }
    
    public function funciones() {
        return view('esp.funciones');
    }


    public function historia() {
        return view('esp.historia');
    }


    public function tinyHouses() {
        return view('esp.tiny-houses');
    }

    public function beneficios() {
        return view('esp.beneficios');
    }

    public function polizas() {
        return view('esp.polizas');
    }


    public function floema() {
        return view('esp.floema');
    }


    public function faq() {
        return view('esp.faq');
    }


    public function nido(){
        $casa = (object) ['price' => 150000, 'name' => 'nido'];
        $accesorios = Accesory::all()->toArray();

        return view('esp.nido',[
            'casa' => $casa,
            'accesorios' => $accesorios
        ]);
    }
}
