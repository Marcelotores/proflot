<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\TurmaRepository;
use Proflot\Models\Turma;
use Proflot\Models\DiaHorarioTurma;
use Proflot\Validators\TurmaValidator;

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

    public function dia_turma_horario ($dia, $horarios, $turma)
    {
        //foreach ajuda a preencher a tabela pivot dia_horario_turmas amarrando a turma e o dia e atualizando os horarios

        foreach ($horarios as $horario) {
            DiaHorarioTurma::create([
               'dia_id' => $dia,
               'horario_id' => $horario,
               'turma_id' => $turma,
            ]);
        }



    }
}
