@extends ('_layouts.master')

@section('body')
<div class="jumbotron" style="background: #1f4e5f;color: white;">
    <div class="container">
        <h2 style="text-align: center">Encontro CEAP: Estabelecendo Diálogos entre Clima escolar, <br>Assembleias estudantis e Justiça restaurativa</h2>
    </div>
</div>

<div class="container">
    <div class="row featurette">
        <div class="col-md-6">
            <h3>Iniciativa</h3>
            <a href="{{ $page->baseUrl }}">Projeto CEAP</a>: Promovendo Condições de Ensino, Aprendizagem e Participação
            (FAPESP)

            <h3>Organização</h3>
            <p>Núcleo de Informática Aplicada à Educação (NIED/Unicamp)</p>

            <h3>Apoio</h3>
            <p>Cátedra UNESCO em Educação Aberta (Unicamp)</p>

            <h3>Data</h3>
            <p>29 de junho de 2017, quinta-feira, 08:45-18:00 (com intervalo para café e almoço)</p>

            <h3>Local</h3>
            <p>Prédio novo do Instituto da Computação (<b>IC 3.5</b>) - Sala 353 – Unicamp.</p>
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-47.06489592790604%2C-22.814370119970008%2C-47.06307202577592%2C-22.81271115034155&amp;layer=mapnik&amp;marker=-22.813540637681427%2C-47.06398397684097" style="border: 1px solid black"></iframe>
            </div>
            Veja um mapa maior no <a href="https://www.openstreetmap.org/?mlat=-22.81352&mlon=-47.06398#map=19/-22.81352/-47.06398">Open Street Maps</a>            ou um <a href="https://goo.gl/maps/4E8JGwuob6m">mapa no Google</a>.
        </div>
    </div>

    <hr>

    <div class="container">
        <h2>Sobre o evento</h2>

        <p>O Clima Escolar pode ser definido como os “...sentimentos e atitudes que são trazidos à tona pelo ambiente escolar”
            (Loukas, 2007). Sabemos que a percepção de cada ente escolar sobre o ambiente escolar tem grande impacto em como
            cada qual constitui sua relação com a escola. Já há um certo consenso sobre os fatores que o impactam o clima,
            e diferentes abordagens e modelos existem para mensurá-lo. Porém ainda carecemos de modelos e processos práticos
            que podem ser usados para a transformação do clima da escola com base nesses dados.</p>
        <p>A melhora do clima está intimamente ligada ao aprimoramento das práticas democráticas na escola. Nesse movimento
            podemos incluir projetos de gestão participativa, mudanças nas práticas didáticas docentes e novas formas de
            participação dos alunos. A participação dos sujeitos nos processos de gestão escolar podem contribuir diretamente
            para a mudança de postura por parte dos estudantes, bem como para diminuições significativas nos problemas disciplinares
            dentro da escola, e consequentemente, na forma como lidam com os processos educativos.</p>
        <p>As assembleias estudantis e a justiça restaurativa para mediação e resolução de conflitos tem uma longa e rica trajetória.
            Ambas podem contribuir de maneira incisiva para a melhoria do clima escolar.</p>
        <p>Nesse encontro visamos reunir as experiências vividas em três escolas situadas em Campinas, São Paulo (EE Francisco
            Álvares, EE Benedito Sampaio e EMEF Maria Pavanatti Favaro) em torno dos pilares elencados: (1) clima escolar,
            (2) justiça restaurativa e (3) assembléias estudantis. Queremos ir além de uma discussão teórica sobre os méritos
            dos temas e de condições ideais de implementação. Visamos elencar os desafios, sucessos e questões que emergem
            no conflito entre o projeto proposto e a efetiva implementação. Ao final do encontro poderemos identificar pontos
            de encontro entre os três temas, possibilidades de troca de práticas e apoio mútuo entre as escolas participantes.</p>

        <p>Dada a natureza do encontro, este é um evento <b>somente para convidados</b>. O grupo será constituído prioritariamente
            de docentes, gestores e alunos das três escolas participantes. Teremos alguns convidados externos e membros das
            diretorias de ensino da região de Campinas.</p>
    </div>

    <hr>

    <div class="container">
        <h2>Agenda</h2>

        <p>O encontro será organizado em torno de palestras de abertura de convidados externos sobre os temas de interesse.
            Seguiremos com apresentações de representantes das escolas sobre suas experiências, e de uma dinâmica de trabalho
            conjunto, entre docentes das escolas, para discussão dos principais desafios e sucessos na implementação dos
            projetos. Ao final das discussões, visamos ter um panorama desses desafios e trajetórias iniciais para implementação
            dos mesmos nas outras unidades escolares. As palestras serão gravadas e disponibilizadas no site Câmera Web da
            Unicamp. <b>Certificados</b> serão oferecidos aos participantes.</p>

        <table align="center" cellpadding="8" cellspacing="0">
            <tr valign="top">
                <td bgcolor="#eee" style="background: #eee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">08:45-09:15</p>
                </td>
                <td colspan="2" width="630" bgcolor="#eee" style="background: #eee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Inscrição</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">09:15-09:30</p>
                </td>
                <td width="281" bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>Introdução ao evento</p>
                </td>
                <td width="345" bgcolor="#ffffff" style="background: #ffffff" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Tel Amiel (NIED/Unicamp)</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">09:30-10:15</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>Palestra: Justiça restaurativa</p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Juiz Egberto de Almeida Penido <br/>
                        <i>Tribunal
			de Justiça do Estado de São Paulo<br/>
1ª Vara Especial da
			Infância e da Juventude</i></p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">10:15-10:45</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>A experiência com justiça restaurativa na <br/> EE Benedito Sampaio
                    </p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Miriam Araújo (Diretora, EE Benedito Sampaio)</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">1045-11:00</p>
                </td>
                <td colspan="2" width="630" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">11:00-11:15</p>
                </td>
                <td colspan="2" width="630" bgcolor="#ffffff" style="background: #ffffff" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Café</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">11:15-12:00</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>Palestra: O Clima Escolar</p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Pesq. Dr. Tel Amiel (NIED/Unicamp)<br/>
                        <i>Coordenador
			da Cátedra UNESCO – Educação Aberta<br/>
</i>Profa. Ms. Wilmara Thomaz <br/>
                        <i>Profa,
			E.E. Benedito Sampaio</i></p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">12:00-12:30</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>O projeto CEAP: O monitoramento e ciclos de ações para melhoria do clima escolar</p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Profa. Ms. Dulce Ribeiro <br/>
                        <i>Diretora,
			EE Francisco Álvares</i></p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">12:30-12:45</p>
                </td>
                <td colspan="2" width="630" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">12:45-14:00</p>
                </td>
                <td colspan="2" width="630" bgcolor="#ffffff" style="background: #ffffff" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Almoço (sanduíches e quitutes no local)</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">14:00-14:45</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>Palestra: Assembléias estudantis</p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Ms. Flavia Vivaldi <br/>
                        <i>GEPEM/FE/Unicamp<br/>
Secretária
			Municipal de Educação de Poços de Caldas</i></p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">14:45-15:15</p>
                </td>
                <td width="281" bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p>A experiência com assembléias estudantis na EMEF Maria Pavanatti</p>
                </td>
                <td width="345" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Alexandra Molina e colegas
                        <br/>
                        <i>Coordenadora,
			EE Maria Pavanatti</i></p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eeeeee" style="background: #eeeeee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">15:15-15:30</p>
                </td>
                <td colspan="2" width="630" bgcolor="#eeeeee" style="background: #eeeeee" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">15:30-17:00</p>
                </td>
                <td colspan="2" width="630" bgcolor="#ffffff" style="background: #ffffff" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Grupos<br/> Definição de possibilidades de implementação, intersecção entre os projetos e <br/> caminhos
                        para apoio mútuo</p>
                    <p align="center">Mediação: Profa. Wilmara Thomaz, Profa. Tatiane Lisie Wenceslau, Profa. Dulce Ribeiro</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#ffffff" style="background: #ffffff" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">17:00-17:45</p>
                </td>
                <td colspan="2" width="630" bgcolor="#ffffff" style="background: #ffffff" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Apresentação dos grupos</p>
                </td>
            </tr>
            <tr valign="top">
                <td bgcolor="#eee" style="background: #eee" style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: none; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0cm">
                    <p align="center">17:45-18:00</p>
                </td>
                <td colspan="2" bgcolor="#eeeeee" style="background: #eeeeee" width="630" style="border: 1px solid #000001; padding-top: 0.05cm; padding-bottom: 0.1cm; padding-left: 0.03cm; padding-right: 0.05cm">
                    <p align="center">Fechamento</p>
                </td>
            </tr>
        </table>
        <p align="justify" style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
    </div>
</div>
@endsection