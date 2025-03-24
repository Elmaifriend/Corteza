<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use App\Models\HouseModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{
    public function inicio(){
        return view("esp.inicio");
    }

    public function nido(){
        $casa = (object) ['price' => 150000, "name" => "nido"];
        $accesorios = Accesory::all()->toArray();

        return view("esp.nido",[
            "casa" => $casa,
            "accesorios" => $accesorios
        ]);
    }
}
