<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\HorarioRepository;
use Proflot\Models\Horario;
use Proflot\Validators\HorarioValidator;

/**
 * Class HorarioRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class HorarioRepositoryEloquent extends BaseRepository implements HorarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Horario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getHorarios ($value, $key = null) {
        return $this->model->lists('id', 'letra');
    }


    public function getAllHorarios () {
        return $this->model->all();
    }
}
