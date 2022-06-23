<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $guarded = [];  

    protected $table = 'Materias';

    public function materias_docentes(){
        
        return $this->morphedByMany('App\docentes','materiable');
    }

    public function materias_alumnos(){
        
        return $this->morphedByMany('App\docentes','materiable');
    }
}

