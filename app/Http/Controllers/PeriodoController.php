<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;

use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Proflot\Repositories\PeriodoRepository;
use Proflot\Http\Requests\AdminPeriodoRequest;
class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $repository;
    
    public function __construct(PeriodoRepository $repository){

            $this->repository = $repository;
            $this->middleware('auth');
    }

    public function index()
    {
        $periodos = $this->repository->paginate(10);
        return view('admin.periodos.index',compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPeriodoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.periodos.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $periodo = $this->repository->find($id);
         return view('admin.periodos.edit',compact('periodo'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPeriodoRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.periodos.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
