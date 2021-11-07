<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcedimentoRequest;
use App\Models\ModelProcedimento;
use App\Models\User;

class ProcedimentoController extends Controller
{

    private $objUser;
    private $objProcedimento;

    public function __construct(){

        $this->objUser = new User();
        $this->objProcedimento = new ModelProcedimento();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimento = $this->objProcedimento->all();
        return view('procedimento',compact('procedimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('createProcedimento',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcedimentoRequest $request)
    {
        $cad = $this->objProcedimento->create([
            'codigo_procedimento'=>$request->codigo_procedimento,
            'nome_procedimento'=>$request->nome_procedimento,
            'valor_procedimento'=>$request->valor_procedimento,
            'data_procedimento'=>$request->data_procedimento,
            'excecao_procedimento'=>$request->excecao_procedimento,
            'id_user'=>$request->id_user
        ]);

        if($cad){
            return redirect('procedimentos');
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
        $procedimento = $this->objProcedimento->find($id);
        return view('showProcedimentos',compact('procedimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedimento = $this->objProcedimento->find($id);
        $users = $this->objUser->all();
        return view('createProcedimento',compact('procedimento','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcedimentoRequest $request, $id)
    {
        $this->objProcedimento->where(['id'=>$id])->update([
            'codigo_procedimento'=>$request->codigo_procedimento,
            'nome_procedimento'=>$request->nome_procedimento,
            'valor_procedimento'=>$request->valor_procedimento,
            'data_procedimento'=>$request->data_procedimento,
            'excecao_procedimento'=>$request->excecao_procedimento,
            'id_user'=>$request->id_user
        ]);

        return redirect('procedimentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delProcedimento = $this->objProcedimento->destroy($id);

        return ($delProcedimento) ? "Sim": "Não";
    }
}
