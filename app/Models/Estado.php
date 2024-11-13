<?php 
namespace App\Models;
use App\Models\Cidade;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $fillable = ['estado'];

    public $timestamps = false;

    public function cidades()
    {
        return $this->hasMany('App\Models\Cidade');
    }
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }
}
