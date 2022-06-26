<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\docentes;
use Illuminate\Database\Eloquent\Collection;

class DocentesMaterias extends TestCase
{
    /** 
     * A basic unit test example.
     *
     * @return void
     */
    public function test_docentes_has_many_materias()
    { 
        $post = docentes::find(1);  
        
        $this->assertInstanceOf(Collection::class, $post->docentes_materias);
    }
}
