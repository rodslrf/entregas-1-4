<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
       Categoria::factory()->count(10)->create();
    }
}