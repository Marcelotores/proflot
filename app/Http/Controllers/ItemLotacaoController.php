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
use Proflot\Models\Professor;
use Proflot\Models\Disciplina;
use Proflot\Models\ItemLotacao;
use Proflot\Models\Sala;


class ItemLotacaoController extends Controller
{



    private $repository;
    private $userRepository;
    private $disciplinaRepository;
    private $salaRepository;
    private $periodoRepository;

    public function  __construct(ItemLotacaoRepository $repository, DisciplinaRepository $disciplinaRepository, SalaRepository $salaRepository, PeriodoRepository $periodoRepository, UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->disciplinaRepository = $disciplinaRepository;
        $this->salaRepository = $salaRepository; 
        $this->periodoRepository = $periodoRepository; 
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = DB::select("select p.name as professor, s.number, d.name from salas s, disciplinas d, users p, lotacao l where p.id = l.user_id and d.id = l.disciplina_id and s.id = l.sala_id");

        return view('admin.lotacoes.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Cadastro turma
        /*
        $periodos = $this->periodoRepository->getPeriodosByCurso();
        $disciplinas = $this->disciplinaRepository->getDisciplinasByCurso();
        $users = $this->userRepository->getUsersByCurso('name', 'id');
        $salas = $this->salaRepository->getSalasByCurso('number', 'id');

        return view('admin.lotacoes.create', compact('periodos', 'disciplinas', 'users', 'salas'));*/

       // $periodos = $this->periodoRepository->getPeriodosByCurso('description', 'id');

        //Cadastro turma_dia_horario



        /*$periodos = $this->periodoRepository->getPeriodosByCurso('description', 'id');
        $disciplinas = $this->disciplinaRepository->getDisciplinasByCurso();
        $professores = $this->professorRepository->lists_curso('name', 'id');
        $salas = $this->salaRepository->lists_curso('number', 'id');

       // $d = $this->disciplinaRepository->getDisciplinasByPeriodo(1);
  
        return view('admin.lotacoes.create', compact('periodos', 'disciplinas', 'professores', 'salas'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
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
