<?php

namespace App\Models;
use App\Models\Advogado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * 
 * user = cliente

 * andress = advogado
 * 
 */

class Cliente extends Model
{ 
 
    use HasFactory;  
    protected $fillable = [
        'nome',
        'sexo',
        'profissao',
        'estadocivil',
        'endereco', 
        'bairro', 
        'cidade', 
        'estado', 
        'cep', 
        'telefone',
        'celular',
        'rg', 
        'cpf', 
        'nascimento',
        'email', 
        'nacionalidade', 
        'cnpj', 
        'observacao',
        'dpvat',
        'contabancaria',
        'honorario_inicial',
        'forma_pagamento',
        'porcentagem_geral',
        'porcentagem_dpvat',
        'resumo_acao',
        'forma_captacao',
        'id_advogado' 
    ];

   
    
   
 /*    public function estado()
    { 
        return $this->belongsTo('App\Models\Estado');
    } */
    public function cidades()
    {
        return $this->hasOne(Cidade::class, 'id', 'cidade');
    }

    public function estados()
    { 
        return $this->hasOne(Estado::class, 'id','estado'); 
    }
    
    public function advogados()
    { 
        return $this->hasOne(Advogado::class, 'id','id_advogado'); 
    }

    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }
}
