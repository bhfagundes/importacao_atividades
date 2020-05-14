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
use App\Models\ConteudoTributarioPlan;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ConteudoTributarioImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //if( $row['data_referencia'])
        //$row['data_referencia'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_referencia']);
        //$row['data_leitura_ato'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_leitura_ato']);
        //$row['data_publicacao'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_publicacao']);
        //$row['data_leitura_ato'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_leitura_ato']);
        //$row['data_vigencia_inicial'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_vigencia_inicial']);
        
        if($row['data_vigencia_final'] != '' && !empty($row['data_vigencia_final']))
        {
            $row['data_vigencia_final'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(str_replace("'   ",'',$row['data_vigencia_final']));

        }
       if($row['data_vencimento'] != '' && !empty($row['data_vencimento']))
        {
            $row['data_vencimento'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(str_replace("'   ",'',$row['data_vencimento']));
        }
        if($row['data_publicacao_obg'] != '' && !empty($row['data_publicacao_obg']))
        {
            $row['data_publicacao_obg'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(str_replace("'   ",'',$row['data_publicacao_obg']));
        }
       // $row['data_vigencia_inicio_obg'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_vigencia_inicio_obg']);
        //$row['data_vigencia_fim_obg'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_vigencia_fim_obg']);
        //$row['data_busca_obg'] =\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_busca_obg']);
        

        ConteudoTributarioPlan::create($row);
        dd('teste');
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
