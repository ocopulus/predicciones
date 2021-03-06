<?php

namespace Prediccion;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	protected $table = 'comentario';
	protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario', 'descripcion', 'clima',
    ];

}
