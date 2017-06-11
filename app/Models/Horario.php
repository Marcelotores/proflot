<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Horario extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['start_time', 'end_time', 'letra'];


     public function dias(){
         return $this->belongsToMany(Dia::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

     public function turmas(){
         return $this->belongsToMany(Turma::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

}
