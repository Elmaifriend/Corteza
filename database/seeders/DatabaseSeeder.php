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
            "nombre" => "Sala 3 Piezas",
            "name" => "3 Piece Living Room",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Mesa de Centro",
            "name" => "Coffee Table",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Mueble de TV",
            "name" => "TV cabinet",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cama Individual",
            "name" => "Single bed",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cama Matrimonial",
            "name" => "Double bed",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cama KingSize",
            "name" => "King Size Bed",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cama Queen",
            "name" => "Queen Bed",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Litera",
            "name" => "Bunk",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Alfombra",
            "name" => "Rug",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Colchon",
            "name" => "Mattress",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "Nombre" => "Lampara de desayunador",
            "name" => "Breakfast bar lamp",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sillas de desayunador",
            "name" => "Breakfast bar chairs",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Comedor",
            "name" => "Dining room",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sillas de Comedor",
            "name" => "Dining Chairs",
            "price" => "999.99",
            "category" => "Muebles"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sala de Patio",
            "name" => "Patio Room",
            "price" => "999.99",
            "category" => "Muebles"
        ]);



        Accesory::factory()->create([
            "nombre" => "Mueble de cocina de piso",
            "name" => "Floor Standing kitchen cabinet",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "nombre" => "Gabinetes de techo",
            "name" => "Ceiling cabinets",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "nombre" => "Instalacion de lavabos y desagues",
            "name" => "Installation of sinks and drains",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "nombre" => "Isla",
            "name" => "Kitchen island",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "nombre" => "Vajillas",
            "name" => "Tableware",
            "price" => "999.99",
            "category" => "Cocina"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cazuelas",
            "name" => "Casseroles",
            "price" => "999.99",
            "category" => "Cocina"
        ]);



        Accesory::factory()->create([
            "nombre" => "Apagadores Dimmer con Focos Dimmer",
            "name" => "Dimmer Switches with Dimmer Bulbs",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Ventiladores",
            "name" => "Fans",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Alexa",
            "name" => "Alexa",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sistema de Luces Solares",
            "name" => "Solar Lighting System",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sistema Dimmer en Luces",
            "name" => "Dimmer System in Lights",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Areas verdes de decoracion",
            "name" => "Green decoration areas",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Ventiladores en las habitaciones",
            "name" => "Fans in the rooms",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Mas contactos de luz",
            "name" => "More light contacts",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Luz de barra en isla de coicna",
            "name" => "Kitchen island bar light",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Lamparas solares",
            "name" => "Solar lamps",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Mufa de Luz Instalada",
            "name" => "Light Mufa Installed",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Tinaco",
            "name" => "Tinaco",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Bomba de Agua",
            "name" => "Water Pump",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "name" => "Boiler de Paso",
            "nombre" => "Step Boiler",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Paneles Solares",
            "name" => "Solar Panels",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Tanque de Gas",
            "name" => "Gas tank",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Tanque Estacionario",
            "name" => "Stationary Tank",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sala de Patio para 5",
            "name" => "Patio Room for 5",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Barandal de Madera",
            "name" => "Wooden Railing",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Fogata",
            "name" => "Bonfire",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "BBQ Asador",
            "name" => "BBQ Grill",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Areas Verdes",
            "name" => "Green Areas",
            "price" => "999.99",
            "category" => "Accesorios"
        ]);




        Accesory::factory()->create([
            "nombre" => "Lavadora",
            "name" => "Washing machine",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Secadora",
            "name" => "Dryer",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Estufa",
            "name" => "Stove",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Refrigerador",
            "name" => "Refrigerator",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Horno",
            "name" => "Oven",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Microondas",
            "name" => "Microwave",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Campana",
            "name" => "Bell",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cafetera",
            "name" => "Coffee maker",
            "price" => "999.99",
            "category" => "Electrodomesticos"
        ]);



        Accesory::factory()->create([
            "nombre" => "Paneles Solares",
            "name" => "Solar Panels",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Aplanar Terreno",
            "name" => "Flatten the Ground",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cercar el Terreno ( Madera o Alambre )",
            "name" => "Fence the Land (Wood or Wire)",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Extencion de Patio 2 pies mas atras o mas adelante",
            "name" => "Patio extension 2 feet further back or forward",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Puertas de Vidrio Corredizas",
            "name" => "Sliding Glass Doors",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Techado de Pergola",
            "name" => "Pergola Roofing",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Conexion de Luz",
            "name" => "Light Connection",
            "price" => "999.99",
            "category" => "Servicios"
        ]);

        Accesory::factory()->create([
            "nombre" => "Conexion de Agua",
            "name" => "Water Connection",
            "price" => "999.99",
            "category" => "Servicios"
        ]);



        Accesory::factory()->create([
            "nombre" => "Barra de Ventanas",
            "name" => "Windows Bar",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "nombre" => "Barras de Puerta",
            "name" => "Windows Bar",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "nombre" => "Camaras de Seguridad",
            "name" => "Security Cameras",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "nombre" => "Cerraduras Inteligentes",
            "name" => "Smart Locks",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);

        Accesory::factory()->create([
            "nombre" => "Sensor de Movimiento",
            "name" => "Motion Sensor",
            "price" => "999.99",
            "category" => "Seguridad"
        ]);
    }
}
