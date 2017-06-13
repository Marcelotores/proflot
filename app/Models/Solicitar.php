<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Solicitar extends Model implements Transformable
{
	use TransformableTrait;

	protected $fillable = [
	'cursos_id',
	'fluxos_id',
	'disciplinas_id',
	'users_id',
	'status',
	'obs',
	'curso_remetente_id',


	];
	public function user(){
		return $this->belongsTo(User::class);
          // ou seja, uma Solicitação pertence a um usuario.   
	}
	public function disciplina(){
		return $this->belongsTo(Disciplina::class);
	}
	public function curso(){
		return $this->belongsTo(Curso::class);
	}
}
