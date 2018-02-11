@extends('_layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="thumbnail">
                <img src="{{ $page->baseUrl.'/img/logo_escolas.png' }}" alt="Logo Monitor de Clima CEAP" style="width: 99px;">
                <div class="caption">
                    <h3>Sistema de Acompanhamento de Ações Escolares</h3>
                    <h3>SAE</h3>
                    <p><a href="http://fa.voluta.com.br" class="btn btn-primary" role="button">Acessar</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection