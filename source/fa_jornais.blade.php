@extends('_layouts.master')

@section('body')
<div class="container">
    <div class="title center-block">
        <h1>Jornais da E.E. Francisco Álvares</h1>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <p><a target="_blank" href="{{ $page->baseUrl.'/fa_jornais/jornal_01_2017_fev.pdf' }}" class="btn btn-primary" role="button">Edição 01 - Fevereiro de 2017</a></p>
        </div>
         <div class="col-sm-12 col-md-12">
            <p><a target="_blank" href="{{ $page->baseUrl.'/fa_jornais/jornal_03_2017_mar.pdf' }}" class="btn btn-primary" role="button">Edição 02 - Março de 2017</a></p>
        </div>
        <div class="col-sm-12 col-md-12">
            <p><a target="_blank" href="{{ $page->baseUrl.'/fa_jornais/jornal_03_2017_jun.pdf' }}" class="btn btn-primary" role="button">Edição 03 - Junho de 2017</a></p>
        </div>
    </div>
</div>
</div>
@endsection