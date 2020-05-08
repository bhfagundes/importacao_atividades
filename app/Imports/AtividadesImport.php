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

class AtividadesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row['esfera'] == "Federal")
        {
            $cidade = 5565;
            $estado = 28;
        }
        else
        {
            $cidade = explode('-',$row['estadomunicipio']);
            if($cidade[1] == "Sumidouro" || $cidade[1] == "SUMIDOURO")
            {
                $cidade[0] = 'RJ';
            }
       
            $estado = Estado::where('sigla',trim($cidade[0]))->first();
      
            $cid = Cidade::where('id_estado',$estado->id)->where('nome',trim($cidade[1]))->first();
            

            if(empty($cid))
            {
                dd($row['estadomunicipio']);
            }
            $cidade = $cid->id;
            $estado = $estado->id;
        }
        
        $arrayCreate = [];
        $idTipo = $row['id_obrigacao'];
        if($idTipo ==7)
        {
            $idTipo = 31;
        }
       
        if(!is_null($row['cod_receita']))
        {
            $codReceita = CodigoReceita::where('codigo_receita',trim($row['cod_receita']))->first(['id_codigo_receita']);
            $arrayCreate['id_codigo_receita'] = $codReceita->id_codigo_receita;
            if($row['cod_receita'] == 422)
            {
                $obrigacoes = Obrigacao::where('id_tipo_obrigacao',trim($idTipo))
                ->where('id_cod_receita',trim($row['cod_receita']))->where('id_cidade',$cidade)->limit(1)->get();
   
            }
            else if($row['cod_receita']  == 5301)
            {
                $obrigacoes = Obrigacao::where('id_tipo_obrigacao',trim($idTipo))
                ->where('codigo_receita',trim($row['cod_receita']))->where('id_cidade',$cidade)->limit(1)->get();
                $arrayCreate['id_codigo_receita'] = 2048;
            }
            else
            {
                $obrigacoes = Obrigacao::where('id_tipo_obrigacao',trim($idTipo))
                ->where('codigo_receita',trim($row['cod_receita']))->where('id_cidade',$cidade)->limit(1)->get();
            }
        }
        else
        {
            $obrigacoes = Obrigacao::where('id_tipo_obrigacao',trim($idTipo))
            ->where('id_cidade',$cidade)->limit(1)
                ->get();
        }

        if(sizeof($obrigacoes) == 0 || empty($obrigacoes))
        {
            dd($arrayCreate);
        }
      

        if($row['atividade']=='Cruzamento')
        {
            $row['atividade']='Auditoria/Cruzamento';
        }
        $tipoAtividade = TipoAtividade::where('descricao',trim($row['atividade']))->first(['id_tipo_atividade']);
        if(trim($row['atividade'])=='Conciliação')
        {
            $row['atividade']="Auditoria/Conciliação";
            $tipoAtividade = TipoAtividade::where('descricao',trim($row['atividade']))->first(['id_tipo_atividade']);

        } 
       
        $arrayCreate['tipo_dia']=$row['tipo_de_dia'];
        $arrayCreate['regra_dia_util']=$row['regra_do_dia_util'];
        $arrayCreate['mandatoria'] = $row['mandatoria'];
        $arrayCreate['conclusao_auto'] = $row['conclusao_automatica'];
        $arrayCreate['quantidade_dias']=$row['data_sem_contagem_de_dias'];
        if(!$tipoAtividade)
        {
            dd($row['atividade']);
        }
        $arrayCreate['id_tipo_atividade']=$tipoAtividade->id_tipo_atividade;
        
        if($row['responsavel'] == 'duilio.oliveira@energisa.om.br')
        {
            $row['responsavel']='duilio.oliveira@energisa.com.br';
        }
        if($row['responsavel'] == 'micheli.bernardes@energisa.com.br')
        {
            $row['responsavel']='micheli.bernardes@energisa.com';
        }
        
        $usuario = Usuarios::where('email',trim($row['responsavel']))->first(['id']);
        
        if(!$usuario)
        {
            dd($row['responsavel']);
        }
        $arrayCreate['usuario_responsavel']=$usuario->id;
        //$arrayCreate['usuario_responsavel']=55;
     
        $row['estabelecimento'] = \str_replace('.','',$row['estabelecimento']);
        $row['estabelecimento'] = \str_replace('-','',$row['estabelecimento']);
        $row['estabelecimento'] = \str_replace('/','',$row['estabelecimento']);
        if($row['estabelecimento'] == '34025997000130')
        {
            $row['estabelecimento'] = '34025976000130';

        }
        if($row['estabelecimento'] == '2260956000158')
        {
             $row['estabelecimento'] = '02260956000158';
        }
        if($row['estabelecimento'] == '00864214000106')
        {
            $row['estabelecimento'] ='0864214000106';
        }
        $ignorados =[];
        //este está baixado sempre deverá ficar aqui
        $ignorados[0]='60876075000162';

        //$ignorados[1]='34025997000130';
        //$ignorados[2]='025086034000171';
        //$ignorados[3]='19440305000142';
        //$ignorados[4]='19527621000158';
/*$ignorados[0]='025086034000171';
$ignorados[1]='04118061000109';
$ignorados[2]='04118058000195';
$ignorados[3]='19440305000142';
$ignorados[4]='26875523000175';
$ignorados[5]='28431548000105';
$ignorados[6] = '28368620000105';
$ignorados[7] = '19527621000158';
$ignorados[8] = '19527621000158';
$ignorados[9] = '19527621000158';
$ignorados[10] ='04118058000195';
$ignorados[11] ='04179911000189';
$ignorados[12] ='04588235000105';
$ignorados[13] ='26875523000175';
$ignorados[14] ='28431548000105';
$ignorados[15] ='28368620000105';
$ignorados[16] ='28382987000175';
$ignorados[17] ='34025997000130';
$ignorados[18] ='45892403000120';
$ignorados[19] ='08302102000173';*/
/*$ignorados[0]='04118058000195';
$ignorados[1]='04179911000189';
$ignorados[2]='04588235000105';
$ignorados[3]='26875523000175';
$ignorados[4]='28431548000105';
$ignorados[5]='28368620000105';
$ignorados[6]='26875523000175';
$ignorados[7]='34025997000130';
$ignorados[8]='45892403000120';
$ignorados[9]='08302102000173';
$ignorados[10] = '04118061000109';
$ignorados[11]='28382987000175';*/        
if(!in_array($row['estabelecimento'],$ignorados)){
        $filial = Filial::where('cnpj',trim($row['estabelecimento']))->first(['id']); 
        if(!$filial)
        {
            dd($row['estabelecimento']);
        }       
        if($arrayCreate['mandatoria'] ==2)
        {
            $arrayCreate['mandatoria']=0;
        }
        if($arrayCreate['conclusao_auto'] == 2)
        {
            $arrayCreate['conclusao_auto'] =0;
        }
        $arrayCreate['id_filial'] =  $filial->id ;
        $arrayCreate['data_com_contagem'] = $row['data_com_contagem_de_dias'];
        for($i =0 ; $i<sizeof($obrigacoes);$i++)
        {   $arrayCreate['id_obrigacao'] = $obrigacoes[$i]->id_obrigacao;
            if(!is_null($row['data_com_contagem_de_dias']))
            {
                $qtd = explode('-',$row['data_com_contagem_de_dias']);
                $arrayCreate['contagem_dia']=1;
                $arrayCreate['quantidade_dias']=$qtd[1];
                $atividade = Atividade::create($arrayCreate);
                $datas = DataObrigacao::where('id_obrigacao',$arrayCreate['id_obrigacao'])->get();
                for($j=0; $j<sizeof($datas);$j++)
                {
                    $result = DB::connection("platform")
                                ->select('call insert_data_atividade_carga(?, ?,?,?,?,?,?,?)',
                                    [$atividade->id,
                                    Carbon::parse($datas[$j]->data_vencimento)
                                    ->format('Y-m-d'),
                                    $arrayCreate['tipo_dia'],
                                    $arrayCreate['regra_dia_util'] ,
                                    $arrayCreate['quantidade_dias'],
                                    $datas[$j]->id_data_obrigacao,
                                    $obrigacoes[$i]->id_ciclo_obrigacao,
                                    $arrayCreate['usuario_responsavel']]);

                }
                
                // aquwi gera
            }
            else
            {
                $arrayCreate['data_com_contagem'] = $row['data_sem_contagem_de_dias'];
                $arrayCreate['quantidade_dias']=$arrayCreate['data_com_contagem'];
                $arrayCreate['contagem_dia']=null;
                $atividade = Atividade::create($arrayCreate);
                $arrayCreate['data_com_contagem'] = $row['data_sem_contagem_de_dias'];
                
                $result = DB::connection("platform")
                                ->select('call gerarDataFixa(?, ?,?,?,?)',
                                    [$arrayCreate['data_com_contagem'],
                                    $arrayCreate['regra_dia_util'],
                                    $arrayCreate['usuario_responsavel'],
                                    $atividade->id,
                                    $arrayCreate['tipo_dia']
                                    ]);

            }
            
            
                DB::connection("platform")
                    ->table("atividade_evidencia")
                    ->insert([
                        "id_atividade"     => $atividade->id,
                        "id_evidencia"     =>  $row['evidencias'] + 1,
                        "mandatoria"       =>  $arrayCreate['mandatoria'],
                        "conclusao_auto"   =>$arrayCreate['conclusao_auto'],
                    ]);
                
            
        }
    }
        
        
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
