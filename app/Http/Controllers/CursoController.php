<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;

use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Proflot\Repositories\CursoRepository;
use Proflot\Http\Requests\AdminCursoRequest;
class CursoController extends Controller
{


    private $repository;

    public function  __construct(CursoRepository $repository)
    {
        $this->repository = $repository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = $this->repository->paginate(10);
        return view('admin.cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCursoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $curso = $this->repository->find($id);
         return view('admin.cursos.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminCursoRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);
        return redirect()->route('admin.cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
