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
    <header id="header" class="sticky-xl-top">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <div class="logo"><a class="navbar-brand" href="#">LOGOMARCA</a></div>
                <button type="button" class="button_toggler" data-bs-toggle="collapse"
                    data-bs-target="#navBarResponsive" aria-controls="navBarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navBarResponsive">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container-fluid bg-image">
            <div class="overlay"></div>
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <form action="form.php" class="form-content text-center p-4 rounded">
                    <h2 class="text-white mb-4">Qual seu melhor e-mail?</h2>
                    <input type="email" class="form-control mb-3" placeholder="Digite seu e-mail">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </section>


        <section class="sobre py-5">
            <div class="sobre-container container">
                <div class="row align-items-center">
                    <!-- Coluna do texto -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="mb-3">Caio Adriano Rodrigues</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur quasi consequuntur nisi
                            quaerat. Facilis nihil impedit doloribus quae! Dolore cupiditate debitis doloribus tempore
                            sint aut non labore ad explicabo quos!</p>
                    </div>
                    <!-- Coluna da imagem -->
                    <div class="col-md-6 text-center">
                        <img src="public/images/perfil.jpg" alt="perfil" class="img-fluid rounded-circle shadow">
                    </div>
                </div>
            </div>
        </section>

        <section id="especialidades" class="py-5 bg-light">
            <div class="container">
                <h2 class="title text-center mb-5">Especialidades</h2>
                <div class="row">
                    <!-- Especialidade 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm text-center p-4">
                            <h3 class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="40" height="40"
                                    class="text-primary">
                                    <path
                                        d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                                </svg>
                            </h3>
                            <h2 class="h5">HTML5</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur alias
                                aliquam facere.</p>
                        </div>
                    </div>
                    <!-- Especialidade 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm text-center p-4">
                            <h3 class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="40" height="40"
                                    class="text-primary">
                                    <path
                                        d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3 .1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2 .1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z" />
                                </svg>
                            </h3>
                            <h2 class="h5">CSS3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur alias
                                aliquam facere.</p>
                        </div>
                    </div>
                    <!-- Especialidade 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm text-center p-4">
                            <h3 class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="40" height="40"
                                    class="text-primary">
                                    <path
                                        d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
                                </svg>
                            </h3>
                            <h2 class="h5">JavaScript</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur alias
                                aliquam facere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="feedback-container" class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Depoimentos -->
                    <div class="col-md-6">
                        <h2 class="mb-4">Depoimentos dos Clientes</h2>
                        <div class="depoimento-single p-3 mb-4 bg-white shadow-sm rounded">
                            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eos, dolore
                                quod placeat
                                deleniti ratione veniam praesentium minus impedit odio cupiditate laudantium
                                necessitatibus
                                quasi omnis voluptate aliquam. Inventore, rerum omnis?</p>
                            <h3 class="text-primary">Nome do Cliente</h3>
                        </div>
                        <div class="depoimento-single p-3 mb-4 bg-white shadow-sm rounded">
                            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eos, dolore
                                quod placeat
                                deleniti ratione veniam praesentium minus impedit odio cupiditate laudantium
                                necessitatibus
                                quasi omnis voluptate aliquam. Inventore, rerum omnis?</p>
                            <h3 class="text-primary">Nome do Cliente</h3>
                        </div>
                        <div class="depoimento-single p-3 mb-4 bg-white shadow-sm rounded">
                            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eos, dolore
                                quod placeat
                                deleniti ratione veniam praesentium minus impedit odio cupiditate laudantium
                                necessitatibus
                                quasi omnis voluptate aliquam. Inventore, rerum omnis?</p>
                            <h3 class="text-primary">Nome do Cliente</h3>
                        </div>
                    </div>

                    <!-- Serviços -->
                    <div class="col-md-6">
                        <h2 class="mb-4">Serviços</h2>
                        <ul class="list-unstyled">
                            <li class="servico-single p-3 mb-4 bg-white shadow-sm rounded">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique laborum
                                    pariatur
                                    dolores repudiandae est dolorem laboriosam quo delectus perspiciatis quibusdam qui,
                                    sapiente odit reprehenderit ducimus a corrupti. Recusandae, assumenda!</p>
                            </li>
                            <li class="servico-single p-3 mb-4 bg-white shadow-sm rounded">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique laborum
                                    pariatur
                                    dolores repudiandae est dolorem laboriosam quo delectus perspiciatis quibusdam qui,
                                    sapiente odit reprehenderit ducimus a corrupti. Recusandae, assumenda!</p>
                            </li>
                            <li class="servico-single p-3 mb-4 bg-white shadow-sm rounded">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique laborum
                                    pariatur
                                    dolores repudiandae est dolorem laboriosam quo delectus perspiciatis quibusdam qui,
                                    sapiente odit reprehenderit ducimus a corrupti. Recusandae, assumenda!</p>
                            </li>
                            <li class="servico-single p-3 mb-4 bg-white shadow-sm rounded">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique laborum
                                    pariatur
                                    dolores repudiandae est dolorem laboriosam quo delectus perspiciatis quibusdam qui,
                                    sapiente odit reprehenderit ducimus a corrupti. Recusandae, assumenda!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

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


    <script src="public/js/plugins/jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            $(".button_toggler").on("click", function () {
                $(this).find("i").toggleClass("fa-bars fa-xmark");
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="public/js/scripts.js"></script>
</body>

</html>