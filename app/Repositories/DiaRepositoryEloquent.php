<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\DiaRepository;
use Proflot\Models\Dia;
use Proflot\Validators\DiaValidator;

/**
 * Class DiaRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class DiaRepositoryEloquent extends BaseRepository implements DiaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Dia::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getDias ($value, $key = null) {
        return $this->model->lists('dia', 'id');
    }

    public function getDiasByCurso()
    {
        return $this->model->all();
    }
}
