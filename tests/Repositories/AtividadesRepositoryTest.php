<?php namespace Tests\Repositories;

use App\Models\Atividades;
use App\Repositories\AtividadesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AtividadesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AtividadesRepository
     */
    protected $atividadesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->atividadesRepo = \App::make(AtividadesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_atividades()
    {
        $atividades = factory(Atividades::class)->make()->toArray();

        $createdAtividades = $this->atividadesRepo->create($atividades);

        $createdAtividades = $createdAtividades->toArray();
        $this->assertArrayHasKey('id', $createdAtividades);
        $this->assertNotNull($createdAtividades['id'], 'Created Atividades must have id specified');
        $this->assertNotNull(Atividades::find($createdAtividades['id']), 'Atividades with given id must be in DB');
        $this->assertModelData($atividades, $createdAtividades);
    }

    /**
     * @test read
     */
    public function test_read_atividades()
    {
        $atividades = factory(Atividades::class)->create();

        $dbAtividades = $this->atividadesRepo->find($atividades->id);

        $dbAtividades = $dbAtividades->toArray();
        $this->assertModelData($atividades->toArray(), $dbAtividades);
    }

    /**
     * @test update
     */
    public function test_update_atividades()
    {
        $atividades = factory(Atividades::class)->create();
        $fakeAtividades = factory(Atividades::class)->make()->toArray();

        $updatedAtividades = $this->atividadesRepo->update($fakeAtividades, $atividades->id);

        $this->assertModelData($fakeAtividades, $updatedAtividades->toArray());
        $dbAtividades = $this->atividadesRepo->find($atividades->id);
        $this->assertModelData($fakeAtividades, $dbAtividades->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_atividades()
    {
        $atividades = factory(Atividades::class)->create();

        $resp = $this->atividadesRepo->delete($atividades->id);

        $this->assertTrue($resp);
        $this->assertNull(Atividades::find($atividades->id), 'Atividades should not exist in DB');
    }
}
