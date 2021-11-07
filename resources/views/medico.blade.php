@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Médicos</p>
        </div>
    </div>

    <div class="text-center mb-5">
        <a href="{{url('medicos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-10 m-auto">
        @csrf
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
            @foreach($medico as $medicos)
                @php
                    $user = $medicos->find($medicos->id)->relUsers;
                @endphp
            <tr>
                <th scope="row">{{$medicos->id}}</th>
                <td>{{$medicos->nome_medico}}</td>
                <td>{{$medicos->rua_medico}}</td>
                <td>{{$medicos->numero_medico}}</td>
                <td>{{$medicos->complemento_medico}}</td>
                <td>{{$medicos->bairro_medico}}</td>
                <td>{{$medicos->cep_medico}}</td>
                <td>{{$medicos->email_medico}}</td>
                <td>{{$medicos->telefone_medico}}</td>
                <!-- <td>{{$user->name}}</td> -->
                <td class="row">
                    <a href="{{url('medicos/'.$medicos->id)}}">
                        <button class="btn btn-dark mr-1">Visualizar</button>
                    </a>
                    <a href="{{url('medicos/'.$medicos->id.'/edit')}}">
                        <button class="btn btn-primary mr-1">Editar</button>
                    </a>
                    <a href="{{url('medicos/'.$medicos->id)}}" class="js-medicoDelete">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection