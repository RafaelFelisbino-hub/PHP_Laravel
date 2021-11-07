<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\ModelMedico;
use App\Models\User;

class MedicoController extends Controller
{

    private $objUser;
    private $objMedico;

    public function __construct(){

        $this->objUser = new User();
        $this->objMedico = new ModelMedico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = $this->objMedico->all();
        return view('medico',compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('createMedico',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicoRequest $request)
    {
        $cad = $this->objMedico->create([
            'nome_medico'=>$request->nome_medico,
            'rua_medico'=>$request->rua_medico,
            'numero_medico'=>$request->numero_medico,
            'complemento_medico'=>$request->complemento_medico,
            'bairro_medico'=>$request->bairro_medico,
            'cep_medico'=>$request->cep_medico,
            'email_medico'=>$request->email_medico,
            'telefone_medico'=>$request->telefone_medico,
            'id_user'=>$request->id_user
        ]);

        if($cad){
            return redirect('medicos');
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
        $medico = $this->objMedico->find($id);
        return view('showMedicos',compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = $this->objMedico->find($id);
        $users = $this->objUser->all();
        return view('createMedico',compact('medico','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicoRequest $request, $id)
    {
        $this->objMedico->where(['id'=>$id])->update([
            'nome_medico'=>$request->nome_medico,
            'rua_medico'=>$request->rua_medico,
            'numero_medico'=>$request->numero_medico,
            'complemento_medico'=>$request->complemento_medico,
            'bairro_medico'=>$request->bairro_medico,
            'cep_medico'=>$request->cep_medico,
            'email_medico'=>$request->email_medico,
            'telefone_medico'=>$request->telefone_medico,
            'id_user'=>$request->id_user
        ]);

        return redirect('medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delMedico = $this->objMedico->destroy($id);

        return ($delMedico) ? "Sim": "Não";
    }
}
