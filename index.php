<?php require "config.php" ?>
<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc959be9ed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/custom.css">
    <title>Portifólio</title>
</head>

<body>
    <header id="header" class="sticky-xl-top bg-dark text-light">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <div class="logo"><a class="navbar-brand" href="/">LOGOMARCA</a></div>
                <button type="button" class="button_toggler bg-dark" data-bs-toggle="collapse"
                    data-bs-target="#navBarResponsive" aria-controls="navBarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navBarResponsive">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php ROOT_PATH ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php ROOT_PATH ?>/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php ROOT_PATH ?>/contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php ROOT_PATH ?>/servicos">Serviços</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php

    $page = (string) ($_GET['url'] ?? 'home');

    // Remove todas as barras (/) da string
    $page = str_replace("/", "", $page);

    switch ($page) {
        case 'sobre':
            include 'pages/home.php';
            break;
        case 'contato':
            include 'pages/contato.php';
            break;
        case 'servicos':
            include 'pages/servicos.php';
            break;
        default:
            include 'pages/home.php';
            break;
    }
    ?>

    <footer id="footer" class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <!-- Sobre -->
                <div class="col-md-4 mb-3">
                    <h5>Sobre</h5>
                    <p>Este é um site fictício criado para fins de aprendizado. Todos os direitos reservados.</p>
                </div>

                <!-- Links Úteis -->
                <div class="col-md-4 mb-3">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#sobre" class="text-light text-decoration-none">Sobre Nós</a></li>
                        <li><a href="#especialidades" class="text-light text-decoration-none">Especialidades</a></li>
                        <li><a href="#feedback-container" class="text-light text-decoration-none">Depoimentos</a></li>
                    </ul>
                </div>

                <!-- Contato -->
                <div class="col-md-4 mb-3">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><a href="mailto:contato@exemplo.com" class="text-light text-decoration-none">
                                <i class="fa-solid fa-envelope me-2"></i>contato@exemplo.com</a>
                        </li>
                        <li><a href="https://wa.me/5511999999999" class="text-light text-decoration-none"
                                target="_blank">
                                <i class="fa-brands fa-whatsapp me-2"></i>+55 (11) 99999-9999</a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/exemplo" class="text-light text-decoration-none"
                                target="_blank">
                                <i class="fa-brands fa-linkedin me-2"></i>LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="mb-0">Todos os direitos reservados. &copy; 2025</p>
            </div>
        </div>
    </footer>


    <script src="public/js/plugins/jquery.js"></script>
    <script src="public/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>