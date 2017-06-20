<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;
use Proflot\Models\User;
use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Proflot\Repositories\TipoRepository;
use Proflot\Repositories\UserRepository;
use Proflot\Repositories\CursoRepository;
use Auth;
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{
  
     private $tipoRepository;
     private $cursoRepository;
     private $repository;
    public function __construct(TipoRepository $tipoRepository, UserRepository $repository, 
        CursoRepository  $cursoRepository ){
         $this->tipoRepository = $tipoRepository;
         $this->repository = $repository;
         $this->cursoRepository = $cursoRepository;
         $this->middleware('auth');
        
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
    

        $users = $this->repository->paginate(5);
        return view('admin.users.index',compact('users','id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cursos = $this->cursoRepository->lists('description','id');
        $tipos = $this->tipoRepository->lists('description','id');
        return view('admin.users.create',compact('tipos','cursos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->curso_id;
         
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'cpf' => $request['cpf'],
            'phone' => $request['phone'],
           'birth_date'=>$request['birth_date'],
           'sex'=>$request['sex'],
           'tipo_id'=>$request['tipo_id'],
           'regiment'=>$request['regiment'],
           'lates'=>$request['lates'],
           'curso_id'=>$id,
        ]);
        return redirect()->route('admin.users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = $this->repository->find($id);
         $tipos_id = $this->repository->find($id)->tipo_id;
         $cursos_id = $this->repository->find($id)->curso_id;
         $tipos = $this->tipoRepository->find($tipos_id)->description;
         $cursos = $this->cursoRepository->find($cursos_id)->description;
        return view('admin.users.visualizar',compact('user','tipos','cursos'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repository->find($id);
        $tipos = $this->tipoRepository->find($id)->lists('description','id');
        return view('admin.users.edit',compact('user','tipos'));
    }

     public function alterarSenha($id){
             
       $user = $this->repository->find($id);
        return view('admin.users.editSenha',compact('user'));
            

     }
     public function updateSenha(Request $request, $id){
        
         $this->repository->update($request['password'],$id);
         return view('/home');

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
        return redirect()->route('admin.users.index');
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
            $this->repository->update(['active'=>1],$id);
            return redirect()->route('admin.users.index');
          }else
          {
            $this->repository->update(['active'=>0],$id);
            return redirect()->route('admin.users.index');
          }
          
          
    }
}
