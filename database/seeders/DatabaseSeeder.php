<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\MenuEntry;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Table;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Susan',
            'email' => 'susan@example.com',
            'role' => Role::Frontline,
        ]);

        User::factory()->create([
            'name' => 'John',
            'email' => 'john@example.com',
            'role' => Role::Kitchen,
        ]);

        Table::factory()->count(5)
            ->state(new Sequence(
                ['id' => 1, 'name' => 'Mesa 1'],
                ['id' => 2, 'name' => 'Mesa 2'],
                ['id' => 3, 'name' => 'Mesa 3'],
                ['id' => 4, 'name' => 'Mesa 4'],
                ['id' => 5, 'name' => 'Mesa 5'],
            ))
            ->create();

        MenuEntry::factory()->count(10)
            ->state(new Sequence(
                ['id' => 1, 'name' => 'Hamburgesa sencilla', 'description' => '200 gr de carne, queso cheddar, vegetales', 'price' => 550],
                ['id' => 2, 'name' => 'Hamburguesa doble', 'description' => '400 gr de carne, doble queso cheddar, vegetales', 'price' => 750],
                ['id' => 3, 'name' => 'Hamburguesa vegetariana', 'description' => 'Hamburguesa de lentejas, vegetales, aguacate', 'price' => 600],
                ['id' => 4, 'name' => 'Hamburguesa de pollo', 'description' => 'Pechuga de pollo, queso suizo, lechuga, tomate', 'price' => 650],
                ['id' => 5, 'name' => 'Hamburguesa con bacon', 'description' => '200 gr de carne, queso cheddar, bacon, vegetales', 'price' => 700],
                ['id' => 6, 'name' => 'Hamburguesa BBQ', 'description' => '200 gr de carne, salsa BBQ, queso cheddar, cebolla caramelizada', 'price' => 720],
                ['id' => 7, 'name' => 'Hamburguesa picante', 'description' => '200 gr de carne, queso pepper jack, jalapeños, salsa picante', 'price' => 680],
                ['id' => 8, 'name' => 'Hamburguesa con champiñones', 'description' => '200 gr de carne, champiñones salteados, queso suizo, cebolla caramelizada', 'price' => 730],
                ['id' => 9, 'name' => 'Hamburguesa con huevo', 'description' => '200 gr de carne, huevo frito, queso cheddar, vegetales', 'price' => 690],
                ['id' => 10, 'name' => 'Hamburguesa gourmet', 'description' => '200 gr de carne, queso brie, rúcula, tomate seco, mayonesa trufada', 'price' => 800]
            ))
            ->create();


    }
}
