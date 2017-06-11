<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\FluxoRepository;
use Proflot\Models\Fluxo;
use Proflot\Validators\FluxoValidator;

/**
 * Class FluxoRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class FluxoRepositoryEloquent extends BaseRepository implements FluxoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Fluxo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
