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
            "name" => "",
            "price" => "",
            "category" => ""
        ]);
    }
}
