<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Periodo extends Model implements Transformable
{
    use TransformableTrait;

     protected $fillable = [
    'description',
    
    ];

    public function disciplinas(){
         return $this->hasMany(Disciplina::class);
          // ou seja, um periodo tem varios disciplinas.	
    }



}
