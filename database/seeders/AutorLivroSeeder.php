<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AutorLivro;

class AutorLivroSeeder extends Seeder
{
    public function run()
    {
       AutorLivro::factory()->count(10)->create();
    }
}