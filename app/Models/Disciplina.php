<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Disciplina extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'periodo_id',
    'name',
    'optativa',
    'pratica',
    'carga_horaria',
    'curso_id',
    'active'
    ];

      public function fluxo(){
         return $this->belongsToMany(Fluxo::class);
          // ou seja, uma disciplina pode ter varios fluxos.   
      }

     public function periodo(){
         return $this->belongsTo(Periodo::class);
          // ou seja, uma disciplina  pertence a um periodo.   
     } 

}
