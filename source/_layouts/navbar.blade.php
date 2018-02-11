
<nav class="navbar navbar-default">
        <a class="navbar-brand" href="{{ $page->baseURL . '/' }}">
            <span>
                <img alt="Logotipo" src="{{ $page->baseUrl.'/img/logo_escolas.png' }}" class="logo-navbar">
                VOLUTA
            </span>
        </a>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#extern-navbar-collapse">
                <span class="sr-only">Mostrar / Esconder Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="extern-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="{{ $page->baseUrl.'/sistemas' }}">SAE</a></li> -->
                    <li><a href="{{ $page->baseUrl.'/sobre' }}">Sobre</a></li>
                    <li><a href="{{ $page->baseUrl.'/contato.php' }}">Contato</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
