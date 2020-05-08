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
use App\Models\DataAtividadeFilial;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CidadesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $estado = Estado::where('sigla',$row['sigla_estado'])->first();
        if (empty($estado))
        {
            dd($row['sigla_estado']);
        }
        $cidade = Cidade::where('id_estado', $estado->id)->where('nome', $row['nome'])->first();
        if(empty($cidade))
        {
            dd($row);
        }
        $cidade->codigo_ibge = $row['codigo'];
        $cidade->save();
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
