<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Turma extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
	    'description',
	    'disciplina_id',
	    'sala_id',
	    'user_id'
	  ];


	   public function sala(){
         return $this->belongsTo(Sala::class);
          // ou seja, uma turama possui uma sala   
     } 

     public function disciplina(){
         return $this->belongsTo(Disciplina::class);
          // ou seja, uma turma pertence a uma disciplina.   
     }

     public function user(){
         return $this->belongsTo(User::class);
          // ou seja, uma turam tem um usuário.   
     }

     public function dias(){
         return $this->belongsToMany(Dia::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

     public function horarios(){
         return $this->belongsToMany(Horario::class, 'dia_horario_turmas');
          // ou seja, uma turam tem um usuário.   
     }

   

}
