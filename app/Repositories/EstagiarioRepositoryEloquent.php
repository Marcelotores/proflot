<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\EstagiarioRepository;
use Proflot\Models\Estagiario;
use Proflot\Validators\EstagiarioValidator;

/**
 * Class EstagiarioRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class EstagiarioRepositoryEloquent extends BaseRepository implements EstagiarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Estagiario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
