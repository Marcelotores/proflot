<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;
use Proflot\Models\Disciplina;
use Auth;
use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Proflot\Repositories\DisciplinaRepository;
use Proflot\Repositories\PeriodoRepository;
use Proflot\Repositories\FluxoRepository;
use Illuminate\Support\Facades\DB;

class DisciplinaController extends Controller
{


    private $repository;
    private $fluxoRepository;
    private $periodoRepository;

    public function __construct(DisciplinaRepository $repository,PeriodoRepository $periodoRepository, FluxoRepository $fluxoRepository ) {
        $this->repository = $repository;
        $this->periodoRepository = $periodoRepository;
        $this->fluxoRepository =$fluxoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = $this->repository->paginate(5);
        return view('admin.disciplinas.index',compact('disciplinas'));

    }

    public function getDisciplinasByPeriodo($periodo) {
        $disciplinas = DB::table('disciplinas')
        ->where('periodo_id', '=', $periodo)->get();
        return $disciplinas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $periodos = $this->periodoRepository->lists('description', 'id');
     
        return view('admin.disciplinas.create',compact('periodos','fluxos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso_id = Auth::user()->curso_id;

        Disciplina::create([
            'periodo_id' => $request['periodo_id'],
            'name' => $request['name'],
            'optativa' => $request['optativa'],
            'pratica' => $request['pratica'],
           'carga_horaria'=>$request['carga_horaria'],
           'curso_id'=> $curso_id,
        ]);
    
         
        return redirect()->route('admin.disciplinas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $disciplina = $this->repository->find($id);

        return view('admin.disciplinas.show',compact('disciplina'));  
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disciplina = $this->repository->find($id);
        $periodos = $this->periodoRepository->lists('description',$id);
       
        return view('admin.disciplinas.edit',compact('disciplina','periodos'));
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
        $data = $request->all();
  
        $this->repository->update($data,$id);
        return redirect()->route('admin.disciplinas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
         $status = $this->repository->find($id)->active;
          
          if($status == 0)
          {
            
            $this->repository->update(['active'=> 1],$id);
            return redirect()->route('admin.disciplinas.index');
          }else if($status == 1)
          {
           
            $this->repository->update(['active'=> 0], $id);
            return redirect()->route('admin.disciplinas.index');
          }
    }
}
