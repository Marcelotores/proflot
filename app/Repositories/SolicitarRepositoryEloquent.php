<?php

namespace Proflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Proflot\Repositories\SolicitarRepository;
use Proflot\Models\Solicitar;
use Proflot\Validators\SolicitarValidator;
use Illuminate\Support\Facades\DB;
/**
 * Class SolicitarRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class SolicitarRepositoryEloquent extends BaseRepository implements SolicitarRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Solicitar::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function encontra($user_id) {
        $professorSolicitado= DB::table('users')
        ->where('id', '=', $user_id)
        ->get();

        return $professorSolicitado;
    }
}
