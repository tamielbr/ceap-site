@extends('_layouts.master') @section('body')
<div class="container" style="margin-top:50px">
    <div class="jumbotron" style="text-align:center">
        <div style="display: flex;align-items: center;justify-content: center;">
            <!-- <img alt="Logotipo" src="{{ $page->baseUrl.'/img/logo_escolas.png' }}"> -->
            <h1>Sistema de Acompanhamento de Ações Escolares</h1>
        </div>
        <p>Apoiando escolas no planejamento e monitoramento coletivo de ações e tomada de decisões</p>
        <div class="row">
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/sae' }}" role="button">Acesso</a></div>
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/sobre' }}" role="button">Sobre o SAE</a></div>
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/tutoriais' }}" role="button">Tutoriais</a></div>
        </div>
    </div>
</div>
@endsection
