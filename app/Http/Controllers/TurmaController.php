<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;

use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Proflot\Repositories\DisciplinaRepository;
use Proflot\Repositories\SalaRepository;
use Proflot\Repositories\PeriodoRepository;
use Proflot\Repositories\ItemLotacaoRepository;
use Proflot\Repositories\UserRepository;
use Proflot\Repositories\TurmaRepository;
use Proflot\Repositories\DiaRepository;
use Proflot\Repositories\HorarioRepository;
use Proflot\Models\Professor;
use Proflot\Models\Disciplina;
use Proflot\Models\ItemLotacao;
use Proflot\Models\Sala;
use Proflot\Models\Turma;
use Proflot\Models\DiaHorarioTurma;


class TurmaController extends Controller
{

    private $repository;
    private $userRepository;
    private $disciplinaRepository;
    private $salaRepository;
    private $periodoRepository;
    private $diaRepository;
    private $horariosRepository;
    private $infoRepository;

    public function  __construct(TurmaRepository $repository, DisciplinaRepository $disciplinaRepository, SalaRepository $salaRepository, PeriodoRepository $periodoRepository, UserRepository $userRepository, DiaRepository $diaRepository, HorarioRepository $horarioRepository, DiaHorarioTurma $infoRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->disciplinaRepository = $disciplinaRepository;
        $this->salaRepository = $salaRepository; 
        $this->periodoRepository = $periodoRepository; 
        $this->diaRepository = $diaRepository; 
        $this->horarioRepository = $horarioRepository; 
        $this->infoRepository = $infoRepository; 
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turma = Turma::find(1);

        foreach ($turma->dias as $d) {
            echo $d->dia;
        }
        

  
        //return $turma->dias();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = $this->periodoRepository->getPeriodosByCurso();
        $disciplinas = $this->disciplinaRepository->getDisciplinasByCurso();
        $users = $this->userRepository->getUsersByCurso('name', 'id');
        $salas = $this->salaRepository->getSalasByCurso('number', 'id');
        $dias = $this->diaRepository->getDias('dia', 'id');
        $horarios = $this->horarioRepository->getHorarios('id', 'letra');
        $horarioss = $this->horarioRepository->getAllHorarios();

        return view('admin.turmas.create', compact('periodos', 'disciplinas', 'users', 'salas', 'dias', 'horarioss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('periodo_id');

        //Pegar valores do dia e hora
        $dia = $request->input('dia');
        $horarios = $request->input('letra');
/*
        foreach ($horarios as $horario) {
            echo $horario;
        }


*/
        
        $turma = new Turma($data);
        $turma->save();


        $teste = $this->repository->dia_turma_horario($dia, $horarios, $turma->id);

        return redirect()->route('admin.turmas.create');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
