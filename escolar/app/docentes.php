<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docentes extends Model
{
    protected $table = 'Docentes';

    protected $casts = [
        'telefonos' => 'array',
    ];

    public function docentes_materias(){
        return $this->morphToMany('App\materias','materiable');
    }
}

