<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Dia extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['dia'];


     public function turmas(){
         return $this->belongsToMany(Turma::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

     public function horarios(){
         return $this->belongsToMany(Horario::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

}
