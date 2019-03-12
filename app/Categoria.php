<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=[
        'descricao','produtos'
    ];

    public function produtos()
    {
        return $this->hasMany('App\Produto','categoria_id');
    }
}
