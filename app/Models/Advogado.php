<?php

namespace App\Models;
use App\Models\Cliente;
use App\Models\Processo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Advogado extends Model
{
    use HasFactory; 
    protected $fillable = [
        'nome', 
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
        'email', 
        'nacionalidade', 
        'cnpj', 
        'oab',
        'observacao', 
    ];


    public function processo()
    {
        return $this->belongsTo('App\Models\Processo');
    }





 
}



