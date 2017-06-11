<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\DiaHorarioTurmaRepository;
use Proflot\Models\DiaHorarioTurma;
use Proflot\Validators\DiaHorarioTurmaValidator;

/**
 * Class DiaHorarioTurmaRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class DiaHorarioTurmaRepositoryEloquent extends BaseRepository implements DiaHorarioTurmaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DiaHorarioTurma::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function dia_turma_horario ($dia, $horario, $turma->id)
    {
        /*
       DiaHorarioTurma::create([
           'dia_id' => $dia,
           'horario_id' => $horario_id,
           'horario_id' => $turma_id,
       ]);

*/ 
        return 'rwaaaaaa';

        //$itemLotacao = new ItemLotacao($data);
        //return $itemLotacao;


       // return redirect()->route('admin.item.index');
    }


}
