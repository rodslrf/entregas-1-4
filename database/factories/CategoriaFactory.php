<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categoria;
use Database\Seeders\CategoriaSeeder;

class CategoriaFactory extends Factory
{
    protected $model = categoria::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
        ];
    }
}