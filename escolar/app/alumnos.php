<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $table = 'Alumnos';

    public function docentes_materias(){
        return $this->morphToMany('App\materias','materiable');
    }
}

