@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Pacientes</p>
        </div>
    </div>

    <div class="text-center mb-5">
        <a href="{{url('pacientes/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="container-fluid">

    </div>
    <div class="col-10 m-auto">
        <table class="table text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col">Complemento</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cep</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <!-- <th scope="col">Usuário</th> -->
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paciente as $pacientes)
                @php
                    $user = $pacientes->find($pacientes->id)->relUsers;
                @endphp
            <tr>
                <th scope="row">{{$pacientes->id}}</th>
                <td>{{$pacientes->nome_paciente}}</td>
                <td>{{$pacientes->rua_paciente}}</td>
                <td>{{$pacientes->numero_paciente}}</td>
                <td>{{$pacientes->complemento_paciente}}</td>
                <td>{{$pacientes->bairro_paciente}}</td>
                <td>{{$pacientes->cep_paciente}}</td>
                <td>{{$pacientes->email_paciente}}</td>
                <td>{{$pacientes->telefone_paciente}}</td>
                <!-- <td>{{$user->name}}</td> -->
                <td class="row">
                    <a href="{{url('pacientes/'.$pacientes->id)}}">
                        <button class="btn btn-dark mr-1">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary mr-1">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection