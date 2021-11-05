@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">@if(isset($paciente))Atualizar paciente @else Cadastrar paciente @endif</p>
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

        @if(isset($paciente))
        <form action="{{url('pacientes/'.$paciente->id)}}" method="POST" name="formEdit" id="formEdit" style="width: 300px">
            @method('PUT')
        @else
        <form action="{{url('pacientes')}}" method="POST" name="formCad" id="formCad" style="width: 300px">
        @endif
            @csrf
            <input class="form-control mb-2" type="text" name="nome_paciente" id="nome_paciente" placeholder="Nome" value="{{$paciente->nome_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="rua_paciente" id="rua_paciente" placeholder="Rua" value="{{$paciente->rua_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="number" name="numero_paciente" id="numero_paciente" placeholder="Número" value="{{$paciente->numero_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="complemento_paciente" id="complemento_paciente" placeholder="Complemento" value="{{$paciente->complemento_paciente ?? ''}}">
            <input class="form-control mb-2" type="text" name="bairro_paciente" id="bairro_paciente" placeholder="Bairro" value="{{$paciente->bairro_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="number" name="cep_paciente" id="cep_paciente" placeholder="CEP" value="{{$paciente->cep_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="email" name="email_paciente" id="email_paciente" placeholder="Email" value="{{$paciente->email_paciente ?? ''}}" required>
            <input class="form-control mb-2" type="number" name="telefone_paciente" id="telefone_paciente" placeholder="Telefone" value="{{$paciente->telefone_paciente ?? ''}}" required>
            <select class="form-control mb-2" name="id_user" id="id_user">
                <option value="{{$paciente->relUsers->id ?? ''}}">{{$paciente->relUsers->id ?? 'Funcionário'}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option> 
                @endforeach
            </select>
            <input class="btn btn-primary mb-5" type="submit" value="@if(isset($paciente))Atualizar @else Cadastrar @endif">
        </form>
    </div>
    </div>
@endsection