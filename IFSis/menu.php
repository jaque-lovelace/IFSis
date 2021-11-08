<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IFSis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-home"></i> Principal</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-address-card"></i>
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="usuario-listar.php">Usuário</a></li>
                            <li><a class="dropdown-item" href="cliente-listar.php">Cliente</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Mais um cadastro</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['nome'] ?> &nbsp;<i class="far fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-tools"></i> Configurações</a></li>
                            <hr class="dropdown-divider">
                            <li><a href="sair.php" class="dropdown-item" href="#"> <i class="fas fa-times-circle"></i> Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
   