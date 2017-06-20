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
use Proflot\Models\Dia;


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
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $turmas = $this->repository->all();
       // $info = DB::select('select d.dia, h.letra as horario, t.description as turma from dias d, horarios h, turmas t, dia_horario_turmas dht where d.id = dht.dia_id and h.id = dht.horario_id and t.id = dht.turma_id');

 

        return view('admin.turmas.index', compact('turmas'));
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
        $dias = $this->diaRepository->getDiasByCurso();
        //$horarios = $this->horarioRepository->getHorarios('id', 'letra');
        $horarios = $this->horarioRepository->getAllHorarios();

        return view('admin.turmas.create', compact('periodos', 'disciplinas', 'users', 'salas', 'dias', 'horarios'));
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


        $info = $request->input('letra');
/*
$dias = array_keys($dados);

foreach ($dias as $dia) {
    echo "$dia";
    echo "<br>";
        foreach ($dados[$dia] as $hora) {
            echo $hora;
        }
        echo "<br>";
}*/

/*
        foreach ($array_keys as $key) {
            echo $key;
            echo "<br>";
        }
*/
/*
        foreach($dados as $dado) {
            echo $dado
            if(is_array($dado)) {
                foreach($dado as $d){
                   echo $d;
                }
            }
            else {
              echo $dado. '<br/>';
            }
        }
*/



        $periodo = $request->input('periodo_id');


        //Pegar valores do dia e hora
        $dia = $request->input('dia');
        $horarios = $request->input('letra');
        $sala = $request->input('sala_id');

        
        $turma = new Turma($data);
        $turma->save();


        $teste = $this->repository->dia_turma_horario($info, $turma->id, $sala);



        if (empty($teste)) {
           return  redirect()->route('admin.turmas.index');
        }else {
            echo $teste;

            $turma->dias()->detach();

            $turma->delete();
            return view('errors.err')
        }

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
        $turma = Turma::find($id);

        $turma->dias()->detach();

        $turma->delete();

        return  redirect()->route('admin.turmas.index');
    }
}
