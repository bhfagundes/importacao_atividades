<?php

namespace App\Imports;

use App\Models\Obrigacao;
use App\Models\DataAtividade;
use App\Models\DataObrigacao;
use App\Models\CodigoReceita;
use App\Models\Usuarios;
use App\Models\TipoAtividade;
use App\Models\Atividade;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\TipoObrigacao;
use App\Models\Filial;
use App\Models\Material;
use App\Models\DataAtividadeFilial;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MaterialImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $material = New Material();
        $material->codigo_produto = $row['codigo']  ;
        $material->descricao_tecnica = $row['descricao'] ;
        $material->ncm = $row['ncm_original'] ;
        $material->tipi = $row['ex_tipi_original']  ;
        $material->ex_tipi_definitiva = $row['ex_tipi_definitiva'] ;
        $material->ncm_definitiva = $row['ncm_definitiva']  ;
        $material->origem_produto = $row['origem_produto']  ;
        $material->id_status_material = 4  ;
        $material->save();


    }



    public function headingRow(): int
    {
        return 1;
    }
   /* public function chunkSize(): int
    //{
        return 1000;
    }*/
}
