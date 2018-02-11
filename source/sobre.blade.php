@extends('_layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Sobre o projeto</h1>
                </div>
                <div class="panel-body">
                    <h2 style="margin-top:0">Sobre o SAE</h2>
                    <p>“O Sistema de Acompanhamento de Ações Escolares (SAE) é resultado do Projeto CEAP (melhorando as condições de Ensino, Aprendizagem e Participação na Escola), financiado pela FAPESP (2015-2018) e construído no <a href="http://nied.unicamp.br">NIED/Unicamp</a>, que teve como objetivo implementar e investigar uma metodologia para a melhoria da escola pública.</p>
                    <p>No Projeto CEAP, partimos do conceito de uma noção sistêmica do "clima escolar" avaliando e buscando aprimorar as condições de aprendizado, ensino e participação da comunidade escolar, promovendo uma maior abertura à transformações e inovação.</p>
                    <p>Para avaliar essas condições, fazemos uso de questionários preenchidos semestralmente online por todos os entes escolares (pais, alunos, gestores, e funcionários) sobre sua percepção de quatro fatores que contribuem para um bom clima
                        escolar, feito em parceria com a <a href="http://tetraanalytix.com">Tetra Analytix</a></p>
                    <p>Envolvemos todos os atores na discussão e apreciação dos dados para definições de metas e ações para a escola. Como parte do projeto, desenvolvemos material formação, registro e tomada de decisões, bem como um sistema de software para
                        gestão desses processos.</p>
                    <p>Para saber mais, leia um <a href="{{ $page->baseUrl.'/ceap_sobre_curto.pdf' }}" target="_blank">breve artigo sobre o Projeto CEAP.</a></p>

                    <h2>Bibliografia Aberta</h2>
                    <p>Mantemos uma bibliografia aberta sobre avaliação participativa, clima escolar e temas correlatos que é utilizada em nosso grupo de discussão mensal. <a href="https://www.zotero.org/groups/clima_escolar/items"  target="_blank">Confira a nossa lista atual no Zotero.</a></p>

                    <h2>Código Aberto</h2>
                    <p>Os sistemas desenvolvidos em código aberto para o projeto estão disponíveis nos links a seguir:</p>
                    <ul>
                        <li><a href="https://github.com/glaubersp/CEAP" target="_blank">Sistema de Acompanhamento de Ações Escolares</a></li>
                        <li><a href="https://github.com/glaubersp/CEAPTetraReport" target="_blank">Gerador de relatórios do TetraAnalytix para o projeto</a></li>
                        <li><a href="https://github.com/glaubersp/CEAPAtlasReport" target="_blank">Gerador de relatórios do Atlas.TI para o projeto</a></li>
                        <li><a href="https://github.com/glaubersp/planejamento_GAS" target="_blank">Protótipo de Gerador de Planejamento Escolar</a></li>
                    </ul>

                    <h2>Equipe</h2>
                    <ul>
                        <li>Pesq. Dr. Tel Amiel - Professor da FE/UnB (anteriormente, pesquisador do Núcleo de Informática Aplicada à Educação) <a href="http://lattes.cnpq.br/0246540741711761" target="_blank">(Plataforma Lattes)</a></li>
                        <li>Me. Wilmara Alves Thomaz - Professora da Rede Estadual de São Paulo e Bolsista FAPESP <a href="http://lattes.cnpq.br/8509146425967503"  target="_blank">(Plataforma Lattes)</a></li>
                        <li>Me. Dulcinéia Aparecida Ribeiro - Professora da Rede Municipal de Campinas, Diretora Escolar da Rede Estadual de São Paulo e Bolsista FAPESP <a href="http://lattes.cnpq.br/7719673938922296"  target="_blank">(Plataforma Lattes)</a></li>
                        <li>Me. Glauber Modolo Cabral (Bolsista TT/FAPESP) <a href="http://lattes.cnpq.br/1756949876810254"  target="_blank">(Plataforma Lattes)</a></li>
                        <li>Cícero Alex (Bolsista TT/FAPESP)<a href="http://lattes.cnpq.br/2841026863780814"  target="_blank">(Plataforma Lattes)</a></li></li>
                    </ul>

                    <h2>Informações adicionais</h2>
                    <p>Linha de pesquisa: <a href="http://dgp.cnpq.br/dgp/espelholinha/4993325342080893432911"  target="_blank">Perspectivas sistêmicas sobre avaliação e clima escolar (NIED/Unicamp)</a></p>
                    <p>Financiamento: <a href="http://www.bv.fapesp.br/pt/auxilios/89923/construcao-de-uma-metodologia-participativa-para-a-transformacao-escolar-baseada-em-dados/"  target="_blank">FAPESP (2015-2018)</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
