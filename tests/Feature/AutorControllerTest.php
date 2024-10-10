<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Autor;

class AutorControllerTest extends TestCase
{
    use RefreshDatabase;
      /**@test */
    public function test_pode_listar_autor_com_paginacao()
    {
        Autor::factory()->count(15)->create();
        $response = $this->get('/autor');

        $response->assertStatus(200);
        $response->assertViewHas('autor');
    }

    public function test_pode_criar_um_novo_autor()
    {
        $dados = [
            'nome'=>'Autor Teste',
            'biografia' =>'Biografia do autor teste',
            'data_nascimento'=>'1990-01-01'
        ];
        $response = $this->post('/autor', $dados);

        $response->assertRedirect('/autor');
        $this->assertDatabaseHas('autors',['nome'=>'Autor teste']);
    }

    public function test_pode_atualizar_um_autor_existente()
    {
        $autor = Autor::factory()->create();
        
        $dadosAtualizados = [ 
            'nome' => 'Nome Atualizado',
            'biografia' => 'Biografia atualizada',
        ];

        $response = $this->put("/autor/{$autor->id}", $dadosAtualizados);
        
        $response->assertRedirect('/autor');
        
        $this->assertDatabaseHas('autor', ['nome' => 'Nome Atualizado']);
    }

    public function test_pode_excluir_um_autor()
    {
        $autor = Autor::factory()->create();

        $response = $this->delete("/autor/{$autor->id}");

        $response->assertRedirect('/autor');
        $this->assertDatabaseMissing('autor', ['id' => $autor->id]);
    }

    public function test_performance_listar_autor_com_paginacao()
    {
        Autor::factory()->count(500)->create();
        $start = microtime(true);
        $response = $this->get('/autores');
        $duration = microtime(true) - $start;
        $response->assertStatus(200);
        $response->assertTrue($duration < 25, "O tempo de resposta foi maior que 2 segundos: {$duration} segundos");
    }
}

