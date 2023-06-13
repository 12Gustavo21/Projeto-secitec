<!--PHP-->
<?php
// URL da API
$url = "http://sistemascr.vhost.ifpb.edu.br/eventos/app/webservice/?evento=secitec2022";

// A função curl_init() inicializa uma nova sessão
$ch = curl_init();

// Utilizado CURLOPT_RETURNTRANSFER para esperar a resposta da URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Enviar a requisição
curl_setopt($ch, CURLOPT_URL, $url);

// Executar solicitação de curl
$dados = curl_exec($ch);

// Fecha uma sessão cURL e libera todos os recursos
curl_close($ch);

// Converter a string em array
$eventos = json_decode($dados, false);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo $eventos->even_descricao_curta;
        ?>
    </title>

    <!--Meta tags-->
    <meta name="description" content="8ª SECITEC">
    <meta name="keywords" content="SECITEC, IFPB, 8ª SECITEC, SECITEC 2023, SECITEC IFPB">
    <meta name="author" content="IFPB Campus Catolé do Rocha">
    <meta property="og:title" content="8ª SECITEC" />
    <meta property="og:description" content="Site da 8ª Semana de Ciência e Tecnologia" />
    <meta property="og:image" content="https://www.ifpb.edu.br/imagens/logotipos/ifpb-1" />

    <!--Estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <!--Icons-->
    <link rel="shortcut icon" href="./assets/icons/icon.svg" type="image/x-icon">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/8f604c477e.js" crossorigin="anonymous"></script>

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!--JavaScript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>
    <!--Header-->
    <header class="mb-5">
        <section id="caixaHeaderUm">
            <nav class="navbar navbar-expand-lg navbar-dark d-flex flex-row 
            justify-content-betweenn align-items-center px-3 pt-0 pb-0">
                <section class="navbar-brand d-flex flex-row justify-content-center align-items-center image-box"
                    id="inicio">
                    <img src="./assets/icons/logo.svg" alt="Logo da 8ª SECITEC" draggable="false"
                        title="Logo da SECITEC">
                </section>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <section class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <section class="offcanvas-header">
                        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Links rápidos</h3>
                        <button type="button" class="btn-close btn-close-white" aria-label="Close"
                            data-bs-dismiss="offcanvas"></button>
                    </section>
                    <section class="offcanvas-body">
                        <ul
                            class="navbar-nav d-flex justify-content-end align-items-start flex-grow-1 gap-2 align-items-lg-center">
                            <li class="nav-item" id="inicio" title="Início">
                                Início
                            </li>
                            <li class="nav-item" id="sobre" title="Sobre">
                                Sobre
                            </li>
                            <li class="nav-item" id="convidados" title="Convidados">
                                Convidados
                            </li>
                            <li class="nav-item" id="contatos" title="Contatos">
                                Contatos
                            </li>
                            <li class="nav-item" id="programacao" title="Programação do evento">
                                Programação
                            </li>
                            <li class="nav-item dropdown d-none d-lg-block d-xl-block">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false" title="Editais da SECITEC">
                                    Editais
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end dropdown-menu-start">
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://drive.google.com/file/d/18cPU5DoKutR70KZQYEEapy-lBtHeayue/view?usp=share_link"
                                            target="_blank" rel="noopener noreferrer">Cronograma de Defesa (Edital
                                            5.2023)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://drive.google.com/file/d/1nEpe3CTm27aflWtjrLgU3eUa_HLFxBDg/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">Cronograma e Orientações
                                            Gerais</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://drive.google.com/file/d/1vIDkU30J7sTnSHjhROQYGF4HQiINtfYn/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">Resultado Mostra Artística
                                            Cultural</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="https://drive.google.com/file/d/18m1hwOP7qqA43_WHOuIhYjggRWBQd5bT/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">Edital de prorrogação da etapa de
                                            avaliação</a></li>
                                    <!--Links inexistentes-->
                                    <li>
                                        <a class="dropdown-item disabled" href="" target="_blank"
                                            rel="noopener noreferrer">Lista
                                            final de trabalhos inscritos</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item disabled" href="" target="_blank"
                                            rel="noopener noreferrer">Resultado das submissões</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item disabled" href="" target="_blank"
                                            rel="noopener noreferrer">Retificação do Edital</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://drive.google.com/file/d/14dzqTxUFMPX46FEihOQTcPrjYFAXVua9/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">Edital Secitec</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://drive.google.com/file/d/19yVetf9Wa2aEXJqOgtzT4DGUjfjxA5KY/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">Edital Mostra Artística e
                                            Cultural</a>
                                    </li>
                                </ul>
                            </li>
                            <section class="d-flex flex-column flex-md-column align-items-start d-lg-none">
                                <li class="nav-item"><a class="nav-link"
                                        href="https://drive.google.com/file/d/1v8HefUj1X_RLwiFIjrulC3HemPAzhGL1/view"
                                        target="_blank" rel="noopener noreferrer">Edital Secitec</a>
                                </li>
                                <!--Links inexistentes-->
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="" target="_blank"
                                        rel="noopener noreferrer">Resultado das
                                        submissões</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="" target="_blank"
                                        rel="noopener noreferrer">Edital Mostra
                                        Artística e Cultural</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://drive.google.com/file/d/1nEpe3CTm27aflWtjrLgU3eUa_HLFxBDg/view?usp=sharing"
                                        target="_blank">Cronograma e Orientações Gerais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://drive.google.com/file/d/1vIDkU30J7sTnSHjhROQYGF4HQiINtfYn/view?usp=sharing"
                                        target="_blank">Resultado Mostra Artística Cultural</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://drive.google.com/file/d/18cPU5DoKutR70KZQYEEapy-lBtHeayue/view?usp=share_link"
                                        target="_blank">Cronograma de Defesa (Edital 5.2022)</a>
                                </li>
                            </section>
                            <li class="nav-item">
                                <a class="nav-link" href="http://sistemascr.vhost.ifpb.edu.br/eventos/app/login"
                                    target="_blank" rel="noopener noreferrer" title="Fazer login no AdminLTE">Login <i
                                        class="fa-solid fa-unlock"></i></a>
                            </li>
                        </ul>
                    </section>
                </section>
            </nav>
        </section>
        <section class="caixaHeaderDois d-flex justify-content-center align-items-center flex-column px-3">
            <h1>
                <?php
                echo $eventos->even_descricao_curta;
                ?>
            </h1>
            <p>
                <?php
                echo $eventos->even_descricao;
                ?>
            </p>
            <p>
                <?php
                echo "Tema: " . $eventos->even_tema;
                ?>
            </p>
            <!-- 02 - 07 de Outubro de 2023 -->
            <section class="informacoes-evento">
                <p><i class="fa-solid fa-calendar-days"></i>
                    <?php
                    $dataInicio = new DateTime($eventos->even_data_inicio);
                    $dataTermino = new DateTime($eventos->even_data_termino);

                    $dataInicioFormatada = $dataInicio->format('d');
                    $dataTerminoFormatada = $dataTermino->format('d') . ' de ' . $dataTermino->format('F') . ' de ' . $dataTermino->format('Y');

                    $mesTerminoFormatado = $dataTermino->format('F');
                    $mesesEmPortugues = array(
                        'January' => 'Janeiro',
                        'February' => 'Fevereiro',
                        'March' => 'Março',
                        'April' => 'Abril',
                        'May' => 'Maio',
                        'June' => 'Junho',
                        'July' => 'Julho',
                        'August' => 'Agosto',
                        'September' => 'Setembro',
                        'October' => 'Outubro',
                        'November' => 'Novembro',
                        'December' => 'Dezembro'
                    );
                    $mesTerminoFormatado = $mesesEmPortugues[$mesTerminoFormatado];

                    $dataTerminoFormatada = str_replace($dataTermino->format('F'), $mesTerminoFormatado, $dataTerminoFormatada);

                    echo $dataInicioFormatada . ' - ' . $dataTerminoFormatada;
                    ?>
                </p>
                <p><i class="fa-solid fa-map-location-dot"></i>
                    <?php
                    echo $eventos->even_cidade . '/' . $eventos->even_estado;
                    ?>
                </p>
            </section>
            <section class="botoes-header d-flex flex-center justify-content-center">
                <a class="btn header-btn d-flex align-items-center justify-content-center" id="saibaMais">Saiba mais</a>
                <a class="btn header-btn d-flex align-items-center justify-content-center" id="contato">Contato</a>
            </section>
        </section>
    </header>
    <!--Main-->
    <main>
        <section class="main-container">
            <section class="loader">
                <div class="waterfall">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p>Carregando...</p>
            </section>
            <section id="Sobre">
                <section>
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Sobre a SECITEC</h2>
                </section>
                <section class="d-flex align-items-center justify-content-center px-3 flex-column flex-lg-row">
                    <section class="pt-5 pe-3 reveal">
                        <p>
                            A 7ª. Semana de Ciência, Tecnologia e Cultura – SECITEC.CR-22 é um evento acadêmico de
                            incentivo
                            à aprendizagem significativa por meio da solução de problemas com uso de método científico e
                            pensamento inovador. É o principal evento de Ciência & Tecnologia do nosso Campus e tem os
                            seguintes objetivos:
                        </p>
                        <ul class="list-unstyled text-left d-inline-block">
                            <li>
                                <p class="d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-check text-danger"></i>
                                    Difundir nossa produção Científica, Tecnológica e Cultural (C&amp;TC-IFPB).</p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-check text-danger"></i>
                                    Oferecer palestras e oficinas sobre temas da atualidade.</p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-check text-danger"></i>
                                    Fortalecer o processo de curricularização da pesquisa e extensão.</p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-check text-danger"></i>
                                    Capacitar estudantes em metodologia das ciências.</p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-check text-danger"></i>
                                    Disseminar C&amp;TC como fator condicionante da inovação e desenvolvimento.</p>
                            </li>
                        </ul>
                    </section>
                    <figure class="w-100 h-100 reveal">
                        <img class="w-100 h-100" src="./assets/geral/01.webp" alt="Banner de divulgação principal">
                    </figure>
                </section>
            </section>
            <section id="SECTIEC-passadas" class="pt-5">
                <section class="descricao d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">SECITEC's passadas
                    </h2>
                </section>
                <section id="carrosel" class="carousel slide reveal" data-bs-ride="carousel" data-bs-touch="true">
                    <section class="carousel-indicators">
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carrosel" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                    </section>
                    <section class="carousel-inner">
                        <section class="carousel-item active" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-2.jpeg/@@images/d4479dd8-afb2-4b6a-b2d9-85ae26ec39b6.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-alyce.jpeg/@@images/d8a463bc-5eb8-4fa5-bb55-d9cfc9f74f59.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-secretaria.jpeg/@@images/f5a2f1f1-60e8-44b3-825d-c046984c9524.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-tamisson.jpeg/@@images/51f282df-9d67-45c4-be90-b04a15e77baa.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-uepb.jpeg/@@images/50187065-1b6b-451a-af45-ec88d3577be1.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/anyconv-com__gincatec3.jpeg/@@images/a3f76d57-f3f4-4eeb-acd5-8fea2bacf83d.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                        <section class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/anyconv-com__gincatec4.jpeg/@@images/50a6f1e6-1297-4315-aa51-460076614b48.jpeg"
                                loading="lazy" draggable="false" alt="...">
                        </section>
                    </section>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carrosel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carrosel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </section>
            </section>
            <section id="Programacao" class="py-5">
                <section class="d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Programação</h2>
                </section>
                <section class="datas d-flex flex-column justify-content-center align-items-center pt-3 reveal">
                    <section class="btn-group py-3 px-3" role="group" aria-label="Basic radio toggle button group"
                        id="filter-btn-box">
                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="dois-btn"
                            autocomplete="off" checked>
                        <label class="btn btn-outline-danger" for="dois-btn">02/10/2023</label>

                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="tres-btn"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="tres-btn">03/10/2023</label>

                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="quatro-btn"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="quatro-btn">04/10/2023</label>

                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="cinco-btn"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="cinco-btn">05/10/2023</label>

                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="seis-btn"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="seis-btn">06/10/2023</label>

                        <input type="radio" class="filter-btn btn-check" name="btnradio" id="sete-btn"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="sete-btn">07/10/2023</label>
                    </section>
                    <section
                        class="programacoes d-flex flex-column justify-content-center align-items-center w-100 reveal">
                        <section class="programacao-box dois px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion1">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Evento data 02/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion1">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Evento data 02/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion1">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Evento data 02/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion1">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            Evento data 02/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion1">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="programacao-box tres hidden px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion2">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Evento data 03/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion2">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            Evento data 03/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion2">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Evento data 03/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseSeven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion2">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="programacao-box quatro hidden px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion3">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                            aria-expanded="false" aria-controls="flush-collapseEight">
                                            Evento data 04/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseEight" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion3">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNine"
                                            aria-expanded="false" aria-controls="flush-collapseNine">
                                            Evento data 04/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseNine" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion3">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTen"
                                            aria-expanded="false" aria-controls="flush-collapseTen">
                                            Evento data 04/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseTen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion3">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="programacao-box cinco hidden px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion4">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                            aria-expanded="false" aria-controls="flush-collapseEleven">
                                            Evento data 05/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseEleven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion4">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve"
                                            aria-expanded="false" aria-controls="flush-collapseTwelve">
                                            Evento data 05/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseTwelve" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion4">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThriteen"
                                            aria-expanded="false" aria-controls="flush-collapseThriteen">
                                            Evento data 05/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseThriteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion4">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="programacao-box seis hidden px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion5">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen"
                                            aria-expanded="false" aria-controls="flush-collapseFourteen">
                                            Evento data 06/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseFourteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion5">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFiveteen"
                                            aria-expanded="false" aria-controls="flush-collapseFiveteen">
                                            Evento data 06/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseFiveteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion5">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen"
                                            aria-expanded="false" aria-controls="flush-collapseSixteen">
                                            Evento data 06/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseSixteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion5">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="programacao-box sete hidden px-3 w-75">
                            <section class="accordion accordion-flush" id="accordion6">
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen"
                                            aria-expanded="false" aria-controls="flush-collapseSeventeen">
                                            Evento data 07/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseSeventeen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion6">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen"
                                            aria-expanded="false" aria-controls="flush-collapseEighteen">
                                            Evento data 07/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseEighteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion6">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                            TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                                <section class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen"
                                            aria-expanded="false" aria-controls="flush-collapseNineteen">
                                            Evento data 07/10/2023
                                        </button>
                                    </h2>
                                    <section id="flush-collapseNineteen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion6">
                                        <section class="accordion-body">
                                            TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
            <section id="Parceiros"
                class="d-flex flex-wrap flex-column align-items-center justify-content-between w-100 h-100 py-3">
                <section class="d-flex justify-content-center align-items-center w-100 pt-3">
                    <h2 class="main-titulo d-flex align-items-start justify-content-center reveal">Parceiros</h2>
                </section>
                <figure class="d-flex justify-content-between align-items-center 
                    flex-wrap flex-column pt-5 flex-lg-row w-50 reveal">
                    <img src="./assets/geral/logo-proexc.webp" alt="logo-proexc"
                        class="object-fit-contain parceiro-logo" loading="lazy" draggable="false" title="Logo PROEXC">
                    <img src="./assets/geral/logo-uepb.webp" alt="logo-uepb" class="object-fit-contain parceiro-logo"
                        loading="lazy" draggable="false" title="Logo UEPB">
                </figure>
            </section>
            <sectioon id="Convidados" class="pt-5 gap-3 d-flex justify-content-center align-items-center flex-column">
                <section class="d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Convidados</h2>
                </section>
                <section
                    class="d-flex flex-row justify-content-around align-items-center flex-wrap gap-3 pt-3 card-box">
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhi0mcXvrbgqnDcG4s2CkYIvaFjfYrfRj8RJWncslKnE-SGergCZErK8Xe-CPmG6j2MNWrAR9lL4O-pUkGAtHQkQwOdQbnm2VqqaI70mtxczyRSjPs1gN2pNuFQZi7SBK7f24EicZDxvj3so2ak_g_vOn3Yrsx0CKva82HqlhJEvHRoh1QnglkSl9EdDw"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Aline Albuquerque Nobrega Rabay</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal1">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade" id="modal1" aria-labelledby="modalLabel1" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel1">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Nenhuma biografia encontrada para este(a) convidado(a)</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh06AK6t7aeybH1r7nxdSrhlwVPCFy2ZheHA6pNKi5u4UJFH_DjjFTe_j8ObhsdUQTaVbvxQT0TixCxZi9p82H7kQ39UZlrCF1iiCALCHDzfiwZ7N5XbGtQo0H61PKqbrN7tYz9MO97pMUVKZwc9vFzvepCe23ybbebU80KjXHn_YKm2Tj-ByC2f6k38A"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Aline Danielly Leal da Silva</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal2">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal2" aria-labelledby="modalLabel2" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel2">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Professora de português do IFPB - Catolé do Rocha.</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgfPG40qQD19zBxI4sPeDzeTxvk5Mqdb9ChVzxuByG4PcKqNAvvKizmBdUh2tgBxDD79aNjXvOXkYEHadHDB0You4SQw64H8KXfMLLLSLnQXgYOLkmlSVfDIGJ1-fUREuRGxvQ2G17KsdQdilhip_mleheWjxgJJh3UMsZ4YiM4oDMzbv2J2Xk-2X6Dpg"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Elionária Lima de Figueredo Graciano</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal3">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal3" aria-labelledby="modalLabel3" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel3">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Graduada em Ciências Agrárias (UEPB); Pedagogia (Kurius); Psicopedagogia
                                            Institucional e
                                            Clínica (FIP); Especialista em Neuropsicopedagogia e Educação Inclusiva
                                            (Faveni);
                                            Deficiências Múltiplas (Faveni); ABA para Autismo e Deficiência Intelectual.
                                        </p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhOeQjfQqhz5f-iPJP4JmwKjwExrPICBq82hR8yBXaZChwbLmrWKst_44a-sJ7Wt0AnVHctRaAw-B1MWoV_JlHGzzV_rpd0LKHG_oGaqYaNBVeQzjSX1YMmNdKjpnQusHjQKS-ryddLhoDU7iUCvKTVhGCKp9oOgWLtMWxMi7dP6NMoT4yBGBH_d3bxIQ"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Douglas da Silva Cunha</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal4">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal4" aria-labelledby="modalLabel4" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel4">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Mestre em Sistemas Agroindustriais pela Universidade Federal de Campina
                                            Grande - UFCG (2017),
                                            Especialista em Educação Matemática pelas Faculdades Integradas de Patos -
                                            FIP (2013) e em
                                            Libras pelo Instituto Federal da Paraíba - IFPB (2019), Licenciado em
                                            Matemática pela
                                            Universidade Estadual Vale do Acaraú - UEVA (2012). Atualmente, Professor
                                            EBTT e professor
                                            Formador do curso de Pós-graduação Ensino de Ciências e Matemática
                                            (EAD-IFPB) do Instituto
                                            Federal da Paraíba - IFPB, Professor da Faculdade Sucesso - FACSU, Professor
                                            Consultor Nível
                                            III do Centro Universitário UNIPLAN e Tutor EAD do curso de Pós-graduação em
                                            Ensino de
                                            Ciências e Matemática da Universidade Federal do Pernambuco - UFPE. Tem como
                                            campo de
                                            interesse e atuação em pesquisas sobre Ensino-Aprendizagem de Matemática,
                                            Formação de
                                            Professores de Matemática, Estatística Aplicada a Educação, Resolução de
                                            Problemas e Uso das
                                            Tecnologias de Informação e Comunicação.</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="d-flex flex-row justify-content-around align-items-center flex-wrap gap-3 card-box">
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhN2IEkPV0s9HldCOLVDRwNu-MtoYYULJj357yzeWEjb4edA6jAM0Gb2eAKABZoQiEJnwuL09XKod1_5JPNUSG3Y0gp1HaFv99QhxMs72KVsRGESO1Ql8Fz9ievCQ_Ktwg88fmRKRa3hNCrpQy652r3ddFffVxsKddXUKf8aULflqOCUsl5pV6yuGBRWQ"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Jose de Arimateia Augusto de Lima</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal5">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal5" aria-labelledby="modalLabel5" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel5">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Graduado em Psicologia e Administração, Mestre em Administração. Professor de
                                            Metodologia Científica e Empreendedorismo</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEijr7tOM_Efv4o2Xu3RDqZcofXpuG89K3ss82L2n-Wx34xckA4uttqQHKkv3OqwTwi0SVZOeZKP6dOTsD7ZtH29-h7MHEjRKHxxvTVwSEJHPP7NMngVd_04C6Y_5BY7tCh73Pfpojg9etdpiBd1DmW9b86Yx5o0lNElL2mZTfTHKc6EPbALhDe4mUtu2w"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Jerri Adriano de Figueredo Gomes Filho</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal6">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal6" aria-labelledby="modalLabel6" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel6">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Graduação de Licenciatura em Educação Física (UNITA); Graduando em Pedagogia
                                            (FACSU); Ledor e Transcritor.</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjHeuo84um8GKY7jUnbDBO7fdN1VoSqkuo4lz_NDap8Lh65JOZx0nc1RCXsTLyF9Qy24zCV7Se1v6HqqHGyA7oL8iPBa0TNFRNonQaS7rmzsSf4poONrVEuTk5NcAwr5ZWsB1kX5Q8qqtYcDut8iQspsn-jnbT7_4KkP3UgehfXo8jGCxw1yg1OZCRk-Q"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Nadia Lauane Silva Oliveira</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal7">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal7" aria-labelledby="modalLabel7" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel7">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Bacharela em Direito pela Universidade Federal de Campina Grande (UFCG).
                                            Especializanda em Educação em Direitos Humanos pela Faculdade IBRA. Aprovada
                                            no XXXIII Exame da Ordem dos Advogados do Brasil (OAB). Técnica em
                                            Informática pelo Instituto Federal de Educação, Ciência e Tecnologia do Rio
                                            Grande do Norte (IFRN). Atualmente, é servidora efetiva do Instituto Federal
                                            da Paraíba (IFPB), ocupante do cargo Assistente de Alunos e lotada no Campus
                                            Catolé do Rocha. (Texto informado pelo autor)</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="card border border-secondary-subtle reveal">
                        <section class="card-image">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgiW2282kxC_nihD27A5XSQQV8yXSAmEqjqdiIg1rDUZvKrh2-DlHHMyYTiwTrsRD2AXULdj85BU1Uw073mM1RR_c49wZb1NYCuH4zIcTZR0VoFbmy2ScnNIEUzZSaG2rqSdtPJ612-eDGeOyR1owb5iZgTSVpgkomXBRi86XyqoPs2S1_R8V4AG7ofMA"
                                class="card-img-top" alt="..." draggable="false" loading="lazy">
                        </section>
                        <section class="card-body">
                            <h3 class="card-title">Thiago dos Anjos Noleto Barros</h3>
                            <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal"
                                data-bs-target="#modal8">Biografia</button>
                        </section>
                        <!-- Modal -->
                        <section class="modal fade reveal" id="modal8" aria-labelledby="modalLabel8" aria-hidden="true">
                            <section class="modal-dialog modal-dialog-centered">
                                <section class="modal-content">
                                    <section class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel8">Biografia</h1>
                                        <button type="button" class="btn-close modal-button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </section>
                                    <section class="modal-body">
                                        <p>Nenhuma biografia encontrada para este(a) convidado(a)</p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </sectioon>
            <section id="Endereco" class="pt-5">
                <section class="descricao d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Faça-nos uma visita
                    </h2>
                </section>
                <section class="d-flex align-items-center justify-content-between  flex-column flex-lg-row w-100">
                    <section class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.407468947313!2d-37.756957024869514!3d-6.3412402936484815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a53bf74a6405cd%3A0x6f7892b812b2fd00!2sIFPB%20-%20Campus%20Catol%C3%A9%20do%20Rocha!5e0!3m2!1spt-BR!2sbr!4v1683920729658!5m2!1spt-BR!2sbr"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Mapa de localização do IFPB - Campus Catolé do Rocha"></iframe>
                    </section>
                    <section class="localizacao">
                        <section
                            class="endereco-completo text-center d-flex align-items-center justify-content-center reveal">
                            <table>
                                <tr>
                                    <th>Endereço</th>
                                </tr>
                                <tr>
                                    <td>Rua Cicero Pereira de Lima</td>
                                </tr>
                                <tr>
                                    <td>Número: 293</td>
                                </tr>
                                <tr>
                                    <td>Cidade: Catolé do Rocha - <abbr title="Paraíba">PB</abbr></td>
                                </tr>
                                <tr>
                                    <td><abbr title="Código de Endereçamento Postal">CEP</abbr>: 58884-000</td>
                                </tr>
                            </table>
                        </section>
                    </section>
                </section>
            </section>
            <section id="Contatos" class="pt-5">
                <section class="d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Entre em contato
                        conosco
                    </h2>
                </section>
                <section class="d-flex flex-column flex-lg-row justify-content-center 
                    align-items-center text-center informacoes-contatos reveal">
                    <section class="contact-box">
                        <i class="fa-solid fa-phone"></i>
                        <p><span class="contact-title">Ligue para:</span> (83) 99126-1908</p>
                        <p><span class="contact-title">Horários:</span> 8:00 - 17:00</p>
                    </section>
                    <section class="contact-box">
                        <i class="fa-solid fa-envelope"></i>
                        <p><span class="contact-title">Envie um e-mail:</span> secitec_cr@ifpb.edu.br</p>
                    </section>
                </section>
                <section class="d-flex flex-column flex-lg-row justify-content-around align-items-start text-center">
                    <section id="msg-box">
                        <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Ou nos deixe uma
                            mensagem</h2>
                    </section>
                    <section id="contact-form">
                        <form action="https://formsubmit.co/gustavo927318@gmail.com" method="POST"
                            class="w-100 d-flex flex-column justify-content-center align-items-center reveal">
                            <section class="group">
                                <input type="text" class="validate" id="input-nome" name="name" required
                                    oninput="validarInput(this)">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="input-nome">Seu nome</label>
                            </section>
                            <section class="group">
                                <input type="email" class="validate" id="input-email" name="email" required
                                    oninput="validarInput(this)">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="input-email">Seu melhor email</label>
                            </section>
                            <textarea class="form-control" rows="5" placeholder="Sua mensagem..." name="message"
                                required spellcheck="true" required></textarea>
                            <button class="form-button" type="submit" data-button>Enviar</button>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <!--Footer-->
    <footer class="mt-5 d-flex flex-row justify-content-center align-items-start w-100 h-50">
        <section class="d-flex justify-content-start align-items-center flex-column w-100 h-100 reveal">
            <section
                class="footer-logo image-box d-flex justify-content-center align-items-center justify-content-lg-start w-100">
                <img src="./assets/icons/logo.svg" alt="Logo da 8ª SECITEC" loading="lazy" draggable="false"
                    title="Logo da 8ª SECITEC" id="inicio">
            </section>
            <section
                class="d-flex flex-column flex-lg-row-reverse justify-content-center align-items-center justify-content-lg-start gap-5 w-100 h-50">
                <section
                    class="social d-flex flex-row justify-content-center align-items-center justify-content-lg-end gap-3 w-100 h-50">
                    <a href="https://www.instagram.com/ifpbcatole.oficial" target="_blank"
                        title="Instagram oficial do campus">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://pt-br.facebook.com/ifpbcatoledorocha" target="_blank"
                        title="Facebook oficial do campus">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/@ifpb-catoledorocha221" target="_blank"
                        title="Youtube oficial do campus">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </section>
                <section class="navigation ps-3">
                    <ul
                        class="footer-list d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-start gap-3 w-100 h-50">
                        <li class="nav-item" id="inicio" title="Início">
                            Início
                        </li>
                        <li class="nav-item" id="sobre" title="Sobre">
                            Sobre
                        </li>
                        <li class="nav-item" id="convidados" title="Convidados">
                            Convidados
                        </li>
                        <li class="nav-item" id="contatos" title="Contatos">
                            Contatos
                        </li>
                        <li class="nav-item" id="programacao" title="Programação do evento">
                            Programação
                        </li>
                    </ul>
                </section>
            </section>
            <section
                class="copyright ps-3 d-flex flex-column align-items-center align-items-lg-start justify-content-center w-100 h-50">
                <p>&copy; <span id="year"> </span> Todos os direitos reservados ao IFPB</p>
            </section>
        </section>
    </footer>

    <!--JavaScript-->
    <script src="./script.js"></script>
</body>

</html>