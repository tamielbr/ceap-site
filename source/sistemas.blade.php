@extends('_layouts.master')

@section('body')
<div class="container">
    <div class="title">
        <h1>Sistemas do CEAP</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $page->baseUrl.'/img/logo_escolas.png' }}" alt="Logo Monitor de Clima CEAP" style="width: 99px;">
                <div class="caption">
                    <h3>Acompanhamento de Ações Escolares</h3>
                    <p><a href="https://ceap.nied.unicamp.br/ceap" class="btn btn-primary" role="button">Acessar</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $page->baseUrl.'/img/rsz_nextcloud.png' }}" alt="Logo Nextcloud">
                <div class="caption">
                    <h3>Nextcloud</h3>
                    <p><a href="https://ceap.nied.unicamp.br/nextcloud" class="btn btn-primary" role="button">Acessar</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $page->baseUrl.'/img/rsz_kanboard.png' }}" alt="Logo Kanboard">
                <div class="caption">
                    <h3>Kanboard</h3>
                    <p><a href="https://ceap.nied.unicamp.br/kanboard" class="btn btn-primary" role="button">Acessar</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $page->baseUrl.'/img/rsz_limesurvey.png' }}" alt="Logo Limesurvey">
                <div class="caption">
                    <h3>LimeSurvey</h3>
                    <p><a href="https://ceap.nied.unicamp.br/limesurvey" class="btn btn-primary" role="button">Acessar</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection