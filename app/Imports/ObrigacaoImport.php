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

class ObrigacaoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        ini_set('max_execution_time', 300);
        if($row['metodo'] == 'update')
        {
            Cidade::where('id',$row['id_cidade'])->update(['nome'=> $row['cidade'],
                'id_estado'=>$row['codigo_estado'],'codigo_ibge'=>$row['ibge'] ]);
        }
        else
        {
            $cidade = new Cidade();
            $cidade->id=$row['id_cidade'];
            $cidade->nome=$row['cidade'];
            $cidade->codigo_ibge=$row['ibge'];
            $cidade->id_estado =$row['codigo_estado'];
            $cidade->save();
        }
      /*  php artisan infyom:scaffold MaoObraServico --fromTable --tableName=mao_obra_servico --connection=mysql ok
        php artisan infyom:scaffold Lc116 --fromTable --tableName=lc_116 --connection=mysql ok
        php artisan infyom:scaffold StatusServico --fromTable --tableName=status_servico --connection=mysql ok
        php artisan infyom:scaffold ClasseServico --fromTable --tableName=classe_servico --connection=mysql ok
        php artisan infyom:scaffold SublasseServico --fromTable --tableName=subclasse_servico --connection=mysql ok
        php artisan infyom:scaffold Servico --fromTable --tableName=servico --connection=mysql ok
*/
        /*$row['id_cod_receita']=$row['id_codigo_receita'];
        $row['id_origem_obrigacao']=2;
        $row['usuario']=6;
        $row['id_tabela']=0;
        Obrigacao::create($row);*/

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
