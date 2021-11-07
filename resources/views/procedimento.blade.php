@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Procedimentos</p>
        </div>
    </div>

    <div class="text-center mb-5">
        <a href="{{url('procedimentos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-10 m-auto">
        @csrf
        <table class="table text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Data</th>
            <th scope="col">Exceção</th>
            <!-- <th scope="col">Usuário</th> -->
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($procedimento as $procedimentos)
                @php
                    $user = $procedimentos->find($procedimentos->id)->relUsers;
                @endphp
            <tr>
                <th scope="row">{{$procedimentos->id}}</th>
                <td>{{$procedimentos->codigo_procedimento}}</td>
                <td>{{$procedimentos->nome_procedimento}}</td>
                <td>{{$procedimentos->valor_procedimento}}</td>
                <td>{{$procedimentos->data_procedimento}}</td>
                <td>{{$procedimentos->excecao_procedimento}}</td>
                <!-- <td>{{$user->name}}</td> -->
                <td class="row justify-content-around">
                    <a href="{{url('procedimentos/'.$procedimentos->id)}}">
                        <button class="btn btn-dark mr-1">Visualizar</button>
                    </a>
                    <a href="{{url('procedimentos/'.$procedimentos->id.'/edit')}}">
                        <button class="btn btn-primary mr-1">Editar</button>
                    </a>
                    <a href="{{url('procedimentos/'.$procedimentos->id)}}" class="js-procedimentoDelete">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection