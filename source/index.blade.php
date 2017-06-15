@extends('_layouts.master')

@section('body')
<div class="container" style="margin-top:50px">
    <div class="jumbotron" style="text-align:center">
        <div style="display: flex;align-items: center;justify-content: center;">
            <img alt="Logotipo" src="{{ $page->baseUrl.'/img/logo_escolas.png' }}">
            <h1>Projeto CEAP</h1>
        </div>
        <p>Melhorando as condições de Ensino, Aprendizagem e Participação na Escola</p>
        <div class="row">
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/sistemas' }}" role="button">Sistemas</a></div>
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/sobre' }}" role="button">Sobre o projeto</a></div>
            <div class="col-md-4 col-sm-4" style="margin-bottom: 10px;"><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/contato.php' }}" role="button">Contato</a></div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-12 col-sm-12" style="display: flex;flex-direction: column;align-items: center;justify-content: center;margin-bottom: 10px;">
                <h1>Encontro CEAP 2017</h1>
            </div>
            <div class="col-md-12 col-sm-12" style="display: flex;align-items: center;justify-content: center;margin-bottom: 10px;">
                <p><a class="btn btn-primary btn-lg" href="{{ $page->baseUrl.'/encontro' }}" role="button">Saiba mais</a></p>
            </div>
        </div>
    </div>
</div>
@endsection