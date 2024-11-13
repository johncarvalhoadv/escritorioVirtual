<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Audiencia
 *
 * @property $id
 * @property $descricao
 * @property $data
 * @property $hora
 * @property $id_processo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Audiencia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['descricao', 'data', 'hora', 'id_processo'];


}
