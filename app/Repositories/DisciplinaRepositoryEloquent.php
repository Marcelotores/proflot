<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\DisciplinaRepository;
use Proflot\Models\Disciplina;
use Proflot\Validators\DisciplinaValidator;
use Illuminate\Support\Facades\DB;

/**
 * Class DisciplinaRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class DisciplinaRepositoryEloquent extends BaseRepository implements DisciplinaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Disciplina::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function getDisciplinasByCurso() {
        $disciplinas = DB::table('disciplinas')
        ->where('active', '=', true)->get();
        return $disciplinas;
    }



    public function lists($value, $key = null){
        return $this->model->lists('name', 'id');
    }

}
