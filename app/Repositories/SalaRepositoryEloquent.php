<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\SalaRepository;
use Proflot\Models\Sala;
use Proflot\Validators\SalaValidator;

/**
 * Class SalaRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class SalaRepositoryEloquent extends BaseRepository implements SalaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sala::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getSalasByCurso ($value, $key = null) {
        return $this->model->lists('number', 'id');
    }
}
