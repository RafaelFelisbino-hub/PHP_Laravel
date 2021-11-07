@extends('templates.template')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">SA 02 Teste Back-End</h1>
            <p class="lead text-center">Visualizar procedimentos</p>
        </div>
    </div>

    <div class="col-10 m-auto">
        Código: {{$procedimento->codigo_procedimento}}<br>
        Nome: {{$procedimento->nome_procedimento}}<br>
        Valor: {{$procedimento->valor_procedimento}}<br>
        Data: {{$procedimento->data_procedimento}}<br>
        Exceção: {{$procedimento->excecao_procedimento}}<br>
        
        <a href="{{url('/procedimentos')}}">
            <button class="btn btn-success mt-3">Voltar</button>
        </a>
    </div>
@endsection