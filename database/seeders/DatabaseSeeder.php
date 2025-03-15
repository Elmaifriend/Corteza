<?php

namespace Database\Seeders;

use App\Models\Accesory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HouseModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);



        /// === House Model === ///
        HouseModel::factory()->create([
            "name" => "Nido",
            "price" => "1234.56"
        ]);

        HouseModel::factory()->create([
            "name" => "Raiz",
            "price" => "1234.56"
        ]);

        HouseModel::factory()->create([
            "name" => "Nido",
            "price" => "1234.56"
        ]);

        HouseModel::factory()->create([
            "name" => "Savia",
            "price" => "1234.56"
        ]);

        HouseModel::factory()->create([
            "name" => "Copa",
            "price" => "1234.56"
        ]);

        HouseModel::factory()->create([
            "name" => "Ebano",
            "price" => "1234.56"
        ]);


        // === Accesories ===
        Accesory::factory()->create([
            "name" => "Sala 3 Piezas",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Mesa de Centro",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Mueble de TV",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Cama Individual",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Cama Matrimonial",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Cama KingSize",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Cama Queen",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Litera",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Alfombra",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Colchon",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Lampara de desayunador",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Sillas de desayunador",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Comedor",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Sillas de Comedor",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "name" => "Sala de Patio",
            "price" => "999.99",
            "category" => "Muebles"
        ]);



        Accesory::factory()->create([
            "name" => "Mueble de cocina de piso",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "name" => "Gabinetes de techo",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "name" => "Instalacion de lavabos y desagues",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "name" => "Isla",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "name" => "Vajillas",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "name" => "Cazuelas",
            "price" => "999.99",
            "category" => "Cocina"
        ]);



        Accesory::factory()->create([
            "name" => "Apagadores Dimmer con Focos Dimmer",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Ventiladores",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Alexa",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Sistema de Luces Solares",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Sistema Dimmer en Luces",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Areas verdes de decoracion",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Ventiladores en las habitaciones",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Mas contactos de luz",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Luz de barra en isla de coicna",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Lamparas solares",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Mufa de Luz Instalada",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Tinaco",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Bomba de Agua",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Boler de Paso",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Paneles Solares",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Tanque de Gas",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Tanque Estacionario",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Sala de Patio para 5",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Barandal de Madera",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Fogata",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "BBQ Asador",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Areas Verdes",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);




        Accesory::factory()->create([
            "name" => "Lavadora",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Secadora",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Estufa",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Refri",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Horno",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Microondas",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Campana",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "name" => "Cafetera",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);



        Accesory::factory()->create([
            "name" => "Paneles Solares",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Aplanar Terreno",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Cercar el Terreno ( Madera o Alambre )",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Extencion de Patio 2 pies mas atras o mas adelante",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Puertas de Vidrio Corredizas",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Techado de Pergola",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Conexion de Luz",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "name" => "Conexion de Agua",
            "price" => "999.99",
            "category" => "Servicios"
        ]);



        Accesory::factory()->create([
            "name" => "Barra de Ventanas",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "name" => "Barras de Puerta",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "name" => "Camaras de Seguridad",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "name" => "Cerraduras Inteligentes",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "name" => "Sensor de Movimiento",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);
    }
}
