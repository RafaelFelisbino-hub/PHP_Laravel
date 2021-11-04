@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Cadastro pacientes</p>
        </div>
    </div>

    <div class="container">
    <div class="col-10 m-auto">
        <form action="{{url('pacientes')}}" method="POST" name="formCad" id="formCard" style="width: 300px">
            @csrf
            <input class="form-control mb-2" type="text" name="nome_paciente" id="nome_paciente" placeholder="Nome">
            <input class="form-control mb-2" type="text" name="rua_paciente" id="rua_paciente" placeholder="Rua">
            <input class="form-control mb-2" type="number" name="numero_paciente" id="numero_paciente" placeholder="Número">
            <input class="form-control mb-2" type="text" name="complemento_paciente" id="complemento_paciente" placeholder="Complemento">
            <input class="form-control mb-2" type="text" name="bairro_paciente" id="bairro_paciente" placeholder="Bairro">
            <input class="form-control mb-2" type="number" name="cep_paciente" id="cep_paciente" placeholder="CEP">
            <input class="form-control mb-2" type="email" name="email_paciente" id="email_paciente" placeholder="Email">
            <input class="form-control mb-2" type="number" name="telefone_paciente" id="telefone_paciente" placeholder="Telefone">
            <select class="form-control mb-2" name="id_user" id="id_user">
                <option value="">Funcionário</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option> 
                @endforeach
            </select>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
    </div>
@endsection