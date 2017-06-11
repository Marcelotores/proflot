<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\TipoRepository;
use Proflot\Models\Tipo;
use Proflot\Validators\TipoValidator;

/**
 * Class TipoRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class TipoRepositoryEloquent extends BaseRepository implements TipoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tipo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function lists ($value, $key = null) {
       return $this->model->lists('description', 'id');
   }
}
