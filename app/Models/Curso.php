<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Curso extends Model implements Transformable
{
    use TransformableTrait;

     protected $fillable = [
      'description'

    ];

    public function alunos(){
         return $this->hasMany(Aluno::class);
          // ou seja um curso tem varios Alunos.	
    }

    public function fluxos(){
         return $this->hasMany(Fluxo::class);
          // ou seja, um curso tem varios fluxos.	
    }
    
    public function salas(){

    	return $this->belongsToMany(Sala::class);
    	// Um Curso possui varias salas.
    }

    public function professores(){
         return $this->hasMany(Professor::class);
          // ou seja um curso tem varios Funcionarios.  
    }

     public function users(){
         return $this->hasMany(User::class);
          // ou seja um curso tem varios Funcionarios.  
    }

      public function solicitars(){
         return $this->hasMany(Solicitar::class);
      
  
      }

}
