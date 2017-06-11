<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\PeriodoRepository;
use Proflot\Models\Periodo;
use Proflot\Validators\PeriodoValidator;

/**
 * Class PeriodoRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class PeriodoRepositoryEloquent extends BaseRepository implements PeriodoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Periodo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function lists($value, $key = null){
        return $this->model->lists('description', 'id');
    }


    public function getPeriodosByCurso() {
        return $this->model->all();
    }
}
