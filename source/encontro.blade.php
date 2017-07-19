@extends ('_layouts.master') @section('body')

<div class="jumbotron jumbotron-encontro">
    <div class="container">
        <h2 class="center">Encontro CEAP: Estabelecendo Diálogos entre Clima escolar,
            <br>Assembleias estudantis e Justiça restaurativa
        </h2>
    </div>
</div>

<div class="alert alert-success alert-encontro" role="alert">
    As apresentações das palestras já estão disponíveis na <a href="#agenda">Agenda</a>.
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
            <p>Prédio novo do Instituto da Computação (
                <b>IC 3.5</b>) - Sala 353 – Unicamp.
            </p>
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d919.4238649640226!2d-47.0637097!3d-22.8137457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1aa3c51e3317b873!2sInstituto+de+Computa%C3%A7%C3%A3o+-+IC+3+%2F+3.5+-+Unicamp!5e0!3m2!1spt-BR!2sbr!4v1497540596189"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> Veja um mapa maior no
            <a href="https://www.openstreetmap.org/?mlat=-22.81352&mlon=-47.06398#map=19/-22.81352/-47.06398">Open Street Maps</a>            ou um
            <a href="https://goo.gl/maps/4E8JGwuob6m">mapa no Google</a>.
        </div>
    </div>
    <hr/>
    <div class="container">
        <h2>Sobre o evento</h2>
        <p>O Clima Escolar pode ser definido como os "...sentimentos e atitudes que são trazidos à tona pelo ambiente escolar"
            (Loukas, 2007). Sabemos que a percepção de cada ente escolar sobre o ambiente escolar tem grande impacto em como
            cada qual constitui sua relação com a escola. Já há um certo consenso sobre os fatores que o impactam o clima,
            e diferentes abordagens e modelos existem para mensurá-lo. Porém ainda carecemos de modelos e processos práticos
            que podem ser usados para a transformação do clima da escola com base nesses dados. </p>
        <p>A melhora do clima está intimamente ligada ao aprimoramento das práticas democráticas na escola. Nesse movimento
            podemos incluir projetos de gestão participativa, mudanças nas práticas didáticas docentes e novas formas de
            participação dos alunos. A participação dos sujeitos nos processos de gestão escolar podem contribuir diretamente
            para a mudança de postura por parte dos estudantes, bem como para diminuições significativas nos problemas disciplinares
            dentro da escola, e consequentemente, na forma como lidam com os processos educativos. </p>
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
            diretorias de ensino da região de Campinas.
        </p>
    </div>
    <hr/>
    <div class="container" id="agenda">
        <h2>Agenda</h2>
        <p>O encontro será organizado em torno de palestras de abertura de convidados externos sobre os temas de interesse.
            Seguiremos com apresentações de representantes das escolas sobre suas experiências, e de uma dinâmica de trabalho
            conjunto, entre docentes das escolas, para discussão dos principais desafios e sucessos na implementação dos
            projetos. Ao final das discussões, visamos ter um panorama desses desafios e trajetórias iniciais para implementação
            dos mesmos nas outras unidades escolares. As palestras serão gravadas e disponibilizadas no site Câmera Web da
            Unicamp.
            <b>Certificados</b> serão oferecidos aos participantes.
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="horario center">
                    <p>08:45-09:15</p>
                </td>
                <td colspan="2" class="center">
                    <p>Inscrição</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>09:15-09:30</p>
                </td>
                <td>
                    <p>Abertura do evento</p>
                </td>
                <td>
                    <p>
                        Tel Amiel
                        <br/>
                        <i>NIED/Unicamp</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>09:30-10:15</p>
                </td>
                <td>
                    <p>
                        Palestra: Justiça restaurativa
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Palestra-Justica_Restaurativa.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>
                        Juiz Egberto de Almeida Penido
                        <br/>
                        <i>Tribunal de Justiça do Estado de São Paulo</i>
                        <br/>
                        <i>1ª Vara Especial da Infância e da Juventude</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>10:15-10:45</p>
                </td>
                <td>
                    <p>
                        A experiência com justiça restaurativa na EE Benedito Sampaio
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Escola-Benedito.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>
                        Miriam Araújo
                        <br/>
                        <i>Diretora, EE Benedito Sampaio</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>10:45-11:00</p>
                </td>
                <td colspan="2" class="center">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>11:00-11:15</p>
                </td>
                <td colspan="2" class="center">
                    <p>Café</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>11:15-12:00</p>
                </td>
                <td>
                    <p>
                        Palestra: O Clima Escolar
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Palestra-Projeto_CEAP.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>Pesq. Dr. Tel Amiel
                        <br/>
                        <i>NIED/Unicamp</i>
                        <br/>
                        <i>Coordenador da Cátedra UNESCO – Educação Aberta</i>
                    </p>
                    <p>
                        Prof<sup>a</sup>. Me. Wilmara Thomaz
                        <br/>
                        <i>Professora, E.E. Benedito Sampaio</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>12:00-12:30</p>
                </td>
                <td>
                    <p>
                        Projeto CEAP: monitoramento e ciclos de ações para melhoria do clima escolar
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Escola-Francisco.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>
                        Prof<sup>a</sup>. Me. Dulce Ribeiro
                        <br/>
                        <i>Diretora, EE Francisco Álvares</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>12:30-12:45</p>
                </td>
                <td colspan="2" class="center">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>12:45-14:00</p>
                </td>
                <td colspan="2" class="center">
                    <p>Almoço (sanduíches e quitutes no local)</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>14:00-14:45</p>
                </td>
                <td>
                    <p>
                        Palestra: Assembléias estudantis
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Palestra-Assembleias_Escolares.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>
                        Me. Flavia Vivaldi
                        <br/>
                        <i>GEPEM/FE/Unicamp</i>
                        <br/>
                        <i>Secretária Municipal de Educação de Poços de Caldas</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>14:45-15:15</p>
                </td>
                <td>
                    <p>
                        A experiência com assembléias estudantis na EMEF Maria Pavanatti
                        <br/>
                        <a target="_blank" href="{{ $page->baseUrl .'/encontro_2017/Escola-Pavanatti.pdf' }}"><span class="glyphicon glyphicon-save"></span>Salvar slides</a>
                        <br>
                        <span class="glyphicon glyphicon-film"></span><i>Vídeo disponível em breve.</i>
                    </p>
                </td>
                <td>
                    <p>
                        Ana Flávia Wulf
                        <br/>
                        <i>EMEF Maria Pavanatti</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>15:15-15:30</p>
                </td>
                <td colspan="2" class="center">
                    <p>Considerações, dúvidas e perguntas</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>15:30-17:00</p>
                </td>
                <td>
                    <p>
                        Discussão em Grupos
                        <br/> Definição de possibilidades de implementação, intersecção entre os projetos e caminhos para
                        apoio mútuo.
                    </p>
                </td>
                <td>
                    <p>
                        Mediação:
                        <br/> Prof
                        <sup>a</sup>. Wilmara Thomaz
                        <br/> Prof
                        <sup>a</sup>. Tatiane Lisie Wenceslau
                        <br/> Prof
                        <sup>a</sup>. Dulce Ribeiro
                    </p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>17:00-17:45</p>
                </td>
                <td colspan="2">
                    <p>Apresentação dos grupos</p>
                </td>
            </tr>
            <tr>
                <td class="horario center">
                    <p>17:45-18:00</p>
                </td>
                <td colspan="2" class="center">
                    <p>Fechamento</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection