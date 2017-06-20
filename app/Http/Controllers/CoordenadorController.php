<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Proflot\Models\Solicitar;
use Proflot\Models\Curso;
use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Proflot\Repositories\UserRepository;
use Proflot\Repositories\DisciplinaRepository;
use Proflot\Repositories\CursoRepository;
use Proflot\Repositories\FluxoRepository;
use Proflot\Repositories\HorarioRepository;
use Proflot\Http\Requests\AdminProfessorRequest;
use Proflot\Repositories\SolicitarRepository;
use Proflot\Models\User;
use Illuminate\Support\Facades\DB;
class CoordenadorController extends Controller
{

    

    private $repository;
    private $disciplinaRepository;
    private $cursoRepository;
    private $fluxoRepository;
    private $horarioRepository;
    private $solicitarRepository;

    public function __construct(UserRepository $repository, DisciplinaRepository $disciplinaRepository, CursoRepository $cursoRepository,
     FluxoRepository $fluxoRepository, HorarioRepository $horarioRepository,SolicitarRepository $solicitarRepository)
    {
        

     $this->repository = $repository;
     $this->disciplinaRepository =$disciplinaRepository;
     $this->cursoRepository =$cursoRepository;
     $this->fluxoRepository =$fluxoRepository;
     $this->horarioRepository= $horarioRepository;
      $this->solicitarRepository= $solicitarRepository;
       $this->middleware('auth');
    }

     public function relatorio(){

        return view('admin.coordenadores.relatorio');

     }
    public function solicita()
    {  
        $remetente = Auth::user()->curso_id;
        $remetente = $this->cursoRepository->find($remetente)->description;
        $users = $this->repository->lists('name','id');
        $disciplinas = $this->disciplinaRepository->not_disci_coord();
        $cursos = $this->cursoRepository->not_curso_coord();
        $fluxos = $this->fluxoRepository->lists('description', 'id');
        return view('admin.coordenadores.solicitar',compact('remetente','cursos','fluxos','disciplinas','users','horarios'));
        
    }
     public function mostraOculta() {
       
            $solicitars = DB::table('solicitars')
            ->where('ocultar', '=',1)->get();
            return view('admin.coordenadores.mostraOculta',compact('solicitars'));
    }

     public function storeSolicita(Request $request)
    {   

       
       
         $curso_remetente_id = Auth::user()->curso_id;
         $remetente = $this->cursoRepository->find($curso_remetente_id)->description;
    
         Solicitar::create([
            'curso_id' => $request['curso_id'],
            'fluxo_id' => $request['fluxo_id'],
            'disciplina_id' => $request['disciplina_id'],
            'user_id' => $request['user_id'],
            'obs'=>$request['obs'],
            'curso_remetente_id'=> $curso_remetente_id,
            'remetente'=>$remetente,
        ]);
           
        return redirect()->route('admin.coordenadores.solicita.mostra');       
    }

     public function resposta(Request $request, $id)
    {       
             $status = $request['status'];
             $resposta = $request['resposta'];
             $this->solicitarRepository->update(['status'=>$status],$id);
             $this->solicitarRepository->update(['resposta'=> $resposta],$id);
            return redirect()->route('admin.coordenadores.solicita.mostra');    
          
    }

    public function ocultar($id)
    {       
          $ocultar = $this->solicitarRepository->find($id)->ocultar;
          if($ocultar == 0)
          {
             $this->solicitarRepository->update(['ocultar'=>1],$id);
            return redirect()->route('admin.coordenadores.solicita.mostra');
          }
             
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        $coordenadores = $this->repository->list_coord_curso(1); // Isto precisa ser consertado. Buscar o id do curso atual
        return view('admin.coordenadores.index',compact('coordenadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        return view('admin.coordenadores.create', compact('professores'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(AdminProfessorRequest $request)
    {
        $data = $request->all();
        $professor = $this->repository->find($data['id']);
        $professor->tipos_id = 2;
        $professor->save();
        return redirect()->route('admin.coordenadores.index');       

    }
    public function mostra()
    {

        $solicitars = $this->solicitarRepository->all();
      
        return view('admin.coordenadores.allSolicita',compact('solicitars'));
        
    }

    
    public function visualiza($id)
    {
        $solicitas = $this->solicitarRepository->find($id);
       
        
          return $professorSolicitado = $this->repository->find($solicitas->user_id)->description; 
          $cursoSolicitado = $this->cursoRepository->find($solicitas->cursos_id)->description;
         $disciplinaSolicitado = $this->disciplinaRepository->find($solicitas->disciplina_id)->name;
         $fluxoSolicitado = $this->fluxoRepository->find($solicitas->cursos_id)->description;
          $cursoRemetente = $this->cursoRepository->find($solicitas->curso_remetente_id)->description; 
        return view('admin.coordenadores.visualizarSolicita',compact('solicita','professorSolicitado','cursoSolicitado','disciplinaSolicitado','fluxoSolicitado','cursoRemetente'));
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordenador = $this->repository->find($id);
        $coordenador->tipo_id = 2;
        $coordenador->save();
        return redirect()->route('admin.coordenadores.index');
    }

    public function status($id)
    {       
          $status = $this->repository->find($id)->active;
          if($status == 0)
          {
            $this->repository->update(['active'=>1],$id);
            return redirect()->route('admin.users.index');
          }else
          {
            $this->repository->update(['active'=>0],$id);
            return redirect()->route('admin.users.index');
          }
          
          
    }
}
