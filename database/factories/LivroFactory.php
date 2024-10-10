<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Livro;
use App\Models\Categoria;

class LivroFactory extends Factory
{
    protected $model = Livro::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'descricao' => $this->faker->paragraph(),
            'data_publicacao' => $this->faker->date(),
            'categoria_id' => Categoria::factory(),
            'editora' => $this->faker->company(),
        ];
    }
}
