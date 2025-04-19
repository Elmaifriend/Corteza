<?php

namespace App\Http\Controllers;

use App\Mail\enFAQ;
use App\Mail\espFAQ;
use Illuminate\Support\Facades\Mail;
use App\Models\Accesory;
use App\Models\HouseModel;
use App\Mail\FloemaEsp;
use App\Mail\FloemaEn;
use GuzzleHttp\Psr7\Request;

class PagesController extends Controller
{
  public function inicio()
  {
    return view('esp.inicio');
  }

  public function corteza()
  {
    return view('esp.corteza');
  }

  public function funciones()
  {
    return view('esp.funciones');
  }


  public function historia()
  {
    return view('esp.historia');
  }


  public function tinyHouses()
  {
    return view('esp.tiny-houses');
  }

  public function beneficios()
  {
    return view('esp.beneficios');
  }

  public function polizas()
  {
    return view('esp.polizas');
  }


  public function floema()
  {
    return view('esp.floema');
  }

  public function floemaFormEsp(){
    $data = request()->all();
    Mail::to(env("MAIL_TO"))->send( new FloemaEsp($data) );
    return redirect()->route("floema");
  }


  public function faq()
  {
    return view('esp.faq');
  }

  public function faqFormEsp(){
    $data = Request()->all();
    Mail::to(env("MAIL_TO"))->send( new espFAQ($data) );
    return redirect()->route("inicio");
  }


  public function nido()
  {
    $casa = HouseModel::where('name', 'Nido')->first();
    $accesorios = Accesory::all()->toArray();

    return view('esp.nido', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function raiz()
  {
    $casa = HouseModel::where('name', 'Raiz')->first();
    $accesorios = Accesory::all()->toArray();

    return view('esp.raiz', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function savia()
  {
    $casa = HouseModel::where('name', 'Savia')->first();
    $accesorios = Accesory::all()->toArray();

    return view('esp.savia', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function copa()
  {
    $casa = HouseModel::where('name', 'Copa')->first();
    $accesorios = Accesory::all()->toArray();

    return view('esp.copa', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function ebano()
  {
    $casa = HouseModel::where('name', 'Ebano')->first();
    $accesorios = Accesory::all()->toArray();

    return view('esp.ebano', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }



  public function home()
  {
    return view('en.home');
  }

  public function en_corteza()
  {
    return view('en.corteza');
  }

  public function functions()
  {
    return view('en.functions');
  }


  public function history()
  {
    return view('en.history');
  }


  public function en_tinyHouses()
  {
    return view('en.tiny-houses');
  }

  public function benefits()
  {
    return view('en.benefits');
  }

  public function policies()
  {
    return view('en.policies');
  }


  public function en_floema()
  {
    return view('en.floema');
  }

  public function floemaFormEn(){
    $data = request()->all();
    Mail::to(env("MAIL_TO"))->send( new FloemaEn($data) );
    return redirect()->route("inicio");
  }


  public function en_faq()
  {
    return view('en.faq');
  }

  public function faqFormEn(){
    $data = Request()->all();
    Mail::to(env("MAIL_TO"))->send( new enFAQ($data) );
    return redirect()->route("inicio");
  }


  public function en_nido()
  {
    $casa = HouseModel::where('name', 'Nido')->first();
    $accesorios = Accesory::all()->toArray();

    return view('en.nido', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function en_raiz()
  {
    $casa = HouseModel::where('name', 'Raiz')->first();
    $accesorios = Accesory::all()->toArray();

    return view('en.raiz', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function en_savia()
  {
    $casa = HouseModel::where('name', 'Sabia')->first();
    $accesorios = Accesory::all()->toArray();

    return view('en.savia', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function en_copa()
  {
    $casa = HouseModel::where('name', 'Copa')->first();
    $accesorios = Accesory::all()->toArray();

    return view('en.copa', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }

  public function en_ebano()
  {
    $casa = HouseModel::where('name', 'Ebano')->first();
    $accesorios = Accesory::all()->toArray();

    return view('en.ebano', [
      'casa' => $casa,
      'accesorios' => $accesorios
    ]);
  }
}
