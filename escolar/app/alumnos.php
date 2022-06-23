<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $guarded = [];  

    protected $table = 'Alumnos';

    public function alumnos_materias(){
        return $this->morphToMany('App\materias','materiable');
    }
}

