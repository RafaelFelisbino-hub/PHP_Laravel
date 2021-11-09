@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">@if(isset($procedimento))Atualizar procedimento @else Cadastrar procedimento @endif</p>
        </div>
    </div>

    <div class="container">
    <div class="col-10 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($procedimento))
        <form action="{{url('procedimentos/'.$procedimento->id)}}" method="POST" name="formEdit" id="formEdit" style="width: 300px">
            @method('PUT')
        @else
        <form action="{{url('procedimentos')}}" method="POST" name="formCad" id="formCad" style="width: 300px">
        @endif
            @csrf
            <input class="form-control mb-2" type="text" name="codigo_procedimento" id="codigo_procedimento" placeholder="Codigo" value="{{$procedimento->codigo_procedimento ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="nome_procedimento" id="nome_procedimento" placeholder="Nome" value="{{$procedimento->nome_procedimento ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="valor_procedimento" id="valor_procedimento" placeholder="Valor" value="{{$procedimento->valor_procedimento ?? ''}}" required>
            <input class="form-control mb-2" type="date" name="data_procedimento" id="data_procedimento" placeholder="Data" value="{{$procedimento->data_procedimento ?? ''}}">
            <input class="form-control mb-2" type="text" name="excecao_procedimento" id="excecao_procedimento" placeholder="Excecão" value="{{$procedimento->excecao_procedimento ?? ''}}" required>
            <select class="form-control mb-2" name="id_user" id="id_user">
                <option value="{{$procedimento->relUsers->id ?? ''}}">{{$procedimento->relUsers->id ?? 'Funcionário'}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option> 
                @endforeach
            </select>
            <input class="btn btn-primary mb-5" type="submit" value="@if(isset($procedimento))Atualizar @else Cadastrar @endif">
        </form>
    </div>
    </div>
@endsection