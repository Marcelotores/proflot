<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\ItemLotacaoRepository;
use Proflot\Models\ItemLotacao;
use Proflot\Validators\ItemLotacaoValidator;

/**
 * Class ItemLotacaoRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class ItemLotacaoRepositoryEloquent extends BaseRepository implements ItemLotacaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ItemLotacao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
