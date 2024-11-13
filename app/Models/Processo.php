<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Processo
 *
 * @property $id
 * @property $status
 * @property $tipo
 * @property $fase_processual
 * @property $numero_processo
 * @property $tipo_acao
 * @property $tipo_cliente
 * @property $id_cliente
 * @property $polo_ativo
 * @property $polo_passivo
 * @property $id_advogado
 * @property $valor_causa
 * @property $valor_acordo
 * @property $valor_honorarios
 * @property $porcentagem_honorarios
 * @property $valor_sucumbencia
 * @property $total_honorarios
 * @property $prazo_aberto
 * @property $data_prazo
 * @property $instancia
 * @property $comarca
 * @property $vara
 * @property $observacoes
 * @property $data_processoinicio
 * @property $data_processofim
 * @property $duracao_processo
 * @property $resultado_processo
 * @property $link_processo
 * @property $link_pastaprocesso
 * @property $created_at
 * @property $updated_at
 *
 * @property Processo[] $processos
 * @property Processo[] $processos
 * @property Processo $processo
 * @property Processo $processo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Processo extends Model
{
    
    static $rules = [
		'tipo' => 'required',
		'tipo_acao' => 'required',
		'tipo_cliente' => 'required',
		'id_cliente' => 'required',
		'polo_ativo' => 'required',
		'polo_passivo' => 'required',
		'id_advogado' => 'required',
		'valor_causa' => 'required',
		'valor_honorarios' => 'required',
		'prazo_aberto' => 'required',
		'instancia' => 'required',
		'comarca' => 'required',
		'vara' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['status','tipo','fase_processual','numero_processo','tipo_acao','tipo_cliente','id_cliente','polo_ativo','polo_passivo','id_advogado','valor_causa','valor_acordo','valor_honorarios','porcentagem_honorarios','valor_sucumbencia','total_honorarios','prazo_aberto','data_prazo','instancia','comarca','vara','observacoes','data_processoinicio','data_processofim','duracao_processo','resultado_processo','link_processo','link_pastaprocesso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function processos()
    {
        return $this->hasMany('App\Models\Processo', 'id_advogado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clienteprocessos()
    {
        return $this->hasMany('App\Models\Processo', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function advprocesso()
    {
        return $this->hasOne('App\Models\Processo','id_advogado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clienteprocesso()
    {
        return $this->hasOne('App\Models\Processo', 'id_cliente');
    }
    

}
