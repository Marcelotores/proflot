<?php

namespace Proflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class DiaHorarioTurma extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'dia_horario_turmas';
    protected $fillable = ['dia_id', 'horario_id', 'turma_id'];

}
