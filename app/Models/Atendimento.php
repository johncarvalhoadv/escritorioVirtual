<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Atendimento
 *
 * @property $id
 * @property $title
 * @property $start
 * @property $end
 * @property $data
 * @property $hora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Atendimento extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','start','end','data','hora'];



}
