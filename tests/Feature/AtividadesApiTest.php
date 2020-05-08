<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Atividades;

class AtividadesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    /*public function test_create_atividades()
    {
        $atividades = factory(Atividades::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/atividades', $atividades
        );

        $this->assertApiResponse($atividades);
    }*/

    /**
     * @test
     */
    public function test_read_atividades()
    {
        //$atividades = factory(Atividades::class)->create();

        /*$this->response = $this->json(
            'GET',
            '/atividades/create'
        );*/
        //$this->response->assertStatus(200);
        //$this->response->assertStatus(200);
        //$this->assertApiResponse("Atividades");
    }

    /**
     * @test
     */
    /*public function test_update_atividades()
    {
        $atividades = factory(Atividades::class)->create();
        $editedAtividades = factory(Atividades::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/atividades/'.$atividades->id,
            $editedAtividades
        );

        $this->assertApiResponse($editedAtividades);
    }*/

    /**
     * @test
     */
    /*public function test_delete_atividades()
    //{
        $atividades = factory(Atividades::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/atividades/'.$atividades->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/atividades/'.$atividades->id
        );

        $this->response->assertStatus(404);
    }*/
}
