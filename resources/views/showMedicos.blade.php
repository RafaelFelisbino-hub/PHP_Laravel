@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Visualizar médicos</p>
        </div>
    </div>

    <div class="col-10 m-auto">
        Nome: {{$medico->nome_medico}}<br>
        Rua: {{$medico->rua_medico}}<br>
        Número: {{$medico->numero_medico}}<br>
        Complemento: {{$medico->complemento_medico}}<br>
        Bairro: {{$medico->bairro_medico}}<br>
        Cep: {{$medico->cep_medico}}<br>
        Email: {{$medico->email_medico}}<br>
        Telefone: {{$medico->telefone_medico}}<br><br>
        
        <a href="{{url('/medicos')}}">
            <button class="btn btn-success">Voltar</button>
        </a>
    </div>
@endsection