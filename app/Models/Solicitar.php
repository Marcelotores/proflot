<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Solicitar extends Model implements Transformable
{
	use TransformableTrait;

	protected $fillable = [
	'curso_id',
	'fluxo_id',
	'disciplina_id',
	'user_id',
	'obs',
	'status',
	'curso_remetente_id',
	'remetente',
	'resposta',
	'ocultar'


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
	public function fluxo(){
		return $this->belongsTo(Fluxo::class);
	}
}
