<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPaciente;
use App\Models\User;

class PacienteController extends Controller
{

    private $objUser;
    private $objPaciente;

    public function __construct(){

        $this->objUser = new User();
        $this->objPaciente = new ModelPaciente();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = $this->objPaciente->all();
        return view('index',compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objPaciente->create([
            'nome_paciente'=>$request->nome_paciente,
            'rua_paciente'=>$request->rua_paciente,
            'numero_paciente'=>$request->numero_paciente,
            'complemento_paciente'=>$request->complemento_paciente,
            'bairro_paciente'=>$request->bairro_paciente,
            'cep_paciente'=>$request->cep_paciente,
            'email_paciente'=>$request->email_paciente,
            'telefone_paciente'=>$request->telefone_paciente,
            'id_user'=>$request->id_user
        ]);

        if($cad){
            return redirect('pacientes');
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
        $paciente = $this->objPaciente->find($id);
        return view('showPaciente',compact('paciente'));
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
