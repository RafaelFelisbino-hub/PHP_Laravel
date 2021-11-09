@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">@if(isset($medico))Atualizar medico @else Cadastrar medico @endif</p>
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

        @if(isset($medico))
        <form action="{{url('medicos/'.$medico->id)}}" method="POST" name="formEdit" id="formEdit" style="width: 300px">
            @method('PUT')
        @else
        <form action="{{url('medicos')}}" method="POST" name="formCad" id="formCad" style="width: 300px">
        @endif
            @csrf
            <input class="form-control mb-2" type="text" name="nome_medico" id="nome_medico" placeholder="Nome" value="{{$medico->nome_medico ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="rua_medico" id="rua_medico" placeholder="Rua" value="{{$medico->rua_medico ?? ''}}" required>
            <input class="form-control mb-2" type="number" name="numero_medico" id="numero_medico" placeholder="Número" value="{{$medico->numero_medico ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="complemento_medico" id="complemento_medico" placeholder="Complemento" value="{{$medico->complemento_medico ?? ''}}">
            <input class="form-control mb-2" type="text" name="bairro_medico" id="bairro_medico" placeholder="Bairro" value="{{$medico->bairro_medico ?? ''}}" required>
            <input class="form-control mb-2" type="text" name="cep_medico" id="cep_medico" placeholder="CEP: 00000-000" value="{{$medico->cep_medico ?? ''}}" required>
            <input class="form-control mb-2" type="email" name="email_medico" id="email_medico" placeholder="Email" value="{{$medico->email_medico ?? ''}}" required>
            <input class="form-control mb-2" type="number" name="telefone_medico" id="telefone_medico" placeholder="Telefone" value="{{$medico->telefone_medico ?? ''}}" required>
            <select class="form-control mb-2" name="id_user" id="id_user">
                <option value="{{$medico->relUsers->id ?? ''}}">{{$medico->relUsers->id ?? 'Funcionário'}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option> 
                @endforeach
            </select>
            <input class="btn btn-primary mb-5" type="submit" value="@if(isset($medico))Atualizar @else Cadastrar @endif">
        </form>
    </div>
    </div>
@endsection