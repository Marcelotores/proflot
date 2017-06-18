<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Fluxo extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
     'description'
    ];

      public function disciplina(){
         return $this->belongsToMany(Disciplina::class);
          // ou seja, uma fluxo pode pertencer a varias disciplinas.   
      }
      public function solicita(){
         return $this->belongsToMany(Solicitar::class);
          // ou seja, uma fluxo pode pertencer a varias disciplinas.   
      }

}
