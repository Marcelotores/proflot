<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\SemestreRepository;
use Proflot\Models\Semestre;
use Proflot\Validators\SemestreValidator;

/**
 * Class SemestreRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class SemestreRepositoryEloquent extends BaseRepository implements SemestreRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Semestre::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
