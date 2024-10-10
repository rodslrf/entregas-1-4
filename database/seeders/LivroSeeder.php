<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\livro;

class LivroSeeder extends Seeder
{
    public function run()
    {
       Livro::factory()->count(10)->create();
    }
}