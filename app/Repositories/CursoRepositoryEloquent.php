<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\CursoRepository;
use Proflot\Models\Curso;
use Proflot\Validators\CursoValidator;

/**
 * Class CursoRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class CursoRepositoryEloquent extends BaseRepository implements CursoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Curso::class;
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

    public function not_curso_coord () {
        $cursos = DB::table('cursos')
        ->where('id', '<>',Auth::user()->curso_id)
        ->lists('description', 'id');
        return $cursos;
    }
}
