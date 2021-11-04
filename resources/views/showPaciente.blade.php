@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Visualizar pacientes</p>
        </div>
    </div>

    <div class="col-10 m-auto">
        Nome: {{$paciente->nome_paciente}}<br>
        Rua: {{$paciente->rua_paciente}}<br>
        Número: {{$paciente->numero_paciente}}<br>
        Complemento: {{$paciente->complemento_paciente}}<br>
        Bairro: {{$paciente->bairro_paciente}}<br>
        Cep: {{$paciente->cep_paciente}}<br>
        Email: {{$paciente->email_paciente}}<br>
        Telefone: {{$paciente->telefone_paciente}}<br><br>
        
        <a href="{{url('/pacientes')}}">
            <button class="btn btn-success">Voltar</button>
        </a>
    </div>
@endsection