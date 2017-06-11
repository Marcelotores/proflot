<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sala extends Model implements Transformable
{
    use TransformableTrait;

     protected $fillable = [
    'campus',
    'capacity',
    'mumber'];

    public function turmas(){
         return $this->hasMany(Turma::class);
          // ou seja, um periodo tem varios disciplinas.	
    }

}
