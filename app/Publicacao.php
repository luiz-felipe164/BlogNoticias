<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
	protected $table = 'publicacao';
    protected $fillable = [
        'titulo', 'descricao','created_at','update_at',
    ];

}
