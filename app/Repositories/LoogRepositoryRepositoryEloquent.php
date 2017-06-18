<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\LoogRepositoryRepository;
use Proflot\Models\LoogRepository;
use Proflot\Validators\LoogRepositoryValidator;

/**
 * Class LoogRepositoryRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class LoogRepositoryRepositoryEloquent extends BaseRepository implements LoogRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LoogRepository::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
