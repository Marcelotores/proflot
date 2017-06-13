<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\TurmaRepository;
use Proflot\Models\Turma;
use Proflot\Models\Sala;
use Proflot\Models\Dia;
use Proflot\Models\DiaHorarioTurma;
use Proflot\Validators\TurmaValidator;

use Illuminate\Support\Facades\DB;

/**
 * Class TurmaRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class TurmaRepositoryEloquent extends BaseRepository implements TurmaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Turma::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function dia_turma_horario ($dia, $horarios, $turma, $sala)
    {
        //foreach ajuda a preencher a tabela pivot dia_horario_turmas amarrando a turma e o dia e atualizando os horarios


        //Verifica se o horario e dia está ou não ocupado
        $sal = Sala::find($sala);
        foreach ($sal->turmas as $t) {
            if (($sala == $t->sala_id) and ($t->id != $turma)) {
                $tur = Turma::find($t->id);
                foreach ($tur->dias as $d) {
                    if ($dia == $d->id) {
                        $di = Dia::find($dia);
                        foreach ($horarios as $hora) {
                            foreach ($di->horarios as $h) {
                                if ($hora == $h->id) {
                                    if ($h->id) {
                                        $valor = $t->description;
                                    }
                                }
                            }
                         }
                    }

                } 

            }
        }

        if (isset($valor)) {
            return "Dia e horário indisponível! A turma $valor já está usando a sala $sal->number $d->dia e no horário $h->letra! ";
        }
        else {
             foreach ($horarios as $horario) {
                DiaHorarioTurma::create([
                   'dia_id' => $dia,
                   'horario_id' => $horario,
                   'turma_id' => $turma,
                ]);
            }
        }


    }
}
