<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    protected $connection = "sga";
    protected $table = "usuarios";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','email','cpf','tel','cel','skype','status','id','id_tipo_usuario','principal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tipo()
    {
        return $this->hasOne('App\Model\Auth\Tipo',"id","id_tipo_usuario");
    }

    public static function employee(Int $id)
    {
        $empresa = DB::connection("test.test.platform")
            ->table("filial")
            ->join("empresa_usuarios","empresa_usuarios.id_empresa","=","filial.id")
            ->where("empresa_usuarios.id_usuario",$id)
            ->where("empresa_usuarios.id_tipo",1)
            ->select("filial.nome_fantasia as nome","filial.id")
            ->get()
            ->first();

        return $empresa;
    }
}
