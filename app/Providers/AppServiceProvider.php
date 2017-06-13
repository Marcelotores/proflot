<?php

namespace Proflot\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind(
            'MasterProflot\Repositories\PeriodoRepository',
            'MasterProflot\Repositories\PeriodoRepositoryEloquent'

        );

        $this->app->bind(
            'MasterProflot\Repositories\ProfessorRepository',
            'MasterProflot\Repositories\ProfessorRepositoryEloquent'

        );

        $this->app->bind(
            'MasterProflot\Repositories\TipoRepository',
            'MasterProflot\Repositories\TipoRepositoryEloquent'

        );

        $this->app->bind(
            'Proflot\Repositories\DisciplinaRepository',
            'Proflot\Repositories\DisciplinaRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\FluxoRepository',
            'Proflot\Repositories\FluxoRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\CursoRepository',
            'Proflot\Repositories\CursoRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\AlunoRepository',
            'Proflot\Repositories\AlunoRepositoryEloquent'
        );
       
        $this->app->bind(
            'Proflot\Repositories\EstagiarioRepository',
            'Proflot\Repositories\EstagiarioRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\HorarioRepository',
            'Proflot\Repositories\HorarioRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\SalaRepository',
            'Proflot\Repositories\SalaRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\PeriodoRepository',
            'Proflot\Repositories\PeriodoRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\ItemLotacaoRepository',
            'Proflot\Repositories\ItemLotacaoRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\UserRepository',
            'Proflot\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\TipoRepository',
            'Proflot\Repositories\TipoRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\TurmaRepository',
            'Proflot\Repositories\TurmaRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\DiaRepository',
            'Proflot\Repositories\DiaRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\DiaHorarioTurmaRepository',
            'Proflot\Repositories\DiaHorarioTurmaRepositoryEloquent'
        );

        $this->app->bind(
            'Proflot\Repositories\SolicitarRepository',
            'Proflot\Repositories\SolicitarRepositoryEloquent'
        );


    }
}
