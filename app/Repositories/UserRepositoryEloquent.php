<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\UserRepository;
use Proflot\Models\User;
use Proflot\Validators\UserValidator;
use Illuminate\Support\Facades\DB;

/**
 * Class UserRepositoryEloquent
 * @package namespace Proflot\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function getUsersByCurso ($value, $key = null) {
        return $this->model->lists('name', 'id');
    }


    public function lists($value, $key = null){
        return $this->model->lists('name', 'id');
    }

    //Retorna todos os coordenadores do curso
    public function list_coord_curso($curso) {
        $coordenadores = DB::table('users')
        ->where('active', '=', '1')
        ->where('tipo_id', '=', '1')
        ->where('curso_id', '=', $curso)
        ->get();

        return $coordenadores;
    }
}
