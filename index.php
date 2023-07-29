<?php
$url = "http://sistemascr.vhost.ifpb.edu.br/eventos/app/webservice/?evento=secitec2022";

$context = stream_context_create(array('http' => array('ignore_errors' => true)));
$dados = file_get_contents($url, false, $context);

$dados_json = json_decode($dados, false);

$eventos = $dados_json->eventos[0];
$atividades = $dados_json->atividades;
$convidados = $dados_json->convidados;
$datas = $dados_json->datas;
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
    <meta name="color-scheme" content="dark light">

    <!--Estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <!--Icons-->
    <link rel="shortcut icon" href="./assets/icons/icon.svg" type="image/x-icon">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/8f604c477e.js" crossorigin="anonymous"></script>

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!--JavaScript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <!--Header-->
    <header>
        <section id="caixaHeaderUm">
            <nav class="navbar navbar-expand-lg navbar-dark d-flex 
            flex-row justify-content-between align-items-center px-3 pt-0 pb-0">
                <figure class="navbar-brand d-flex flex-row justify-content-center align-items-center image-box" id="inicio">
                    <img src="./assets/geral/logoSECITEC.webp" alt="Logo da 8ª SECITEC" loading="lazy" draggable="false" title="Logo da 8ª SECITEC" />
                </figure>
                <button class="navbar-toggler mt-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end d-flex flex-lg-row justify-content-lg-end align-items-lg-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Links rápidos</h3>
                        <button type="button" class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav d-flex justify-content-end align-items-start 
                        flex-grow-1 gap-2 align-items-lg-center">
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
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" title="Editais da SECITEC">
                                    Editais
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end dropdown-menu-start">
                                    <li>
                                        <a class="dropdown-item" href="https://drive.google.com/file/d/1IAMOV6S2GFdl9In0-BO000AVJ5RTlXML/view" target="_blank" rel="noopener noreferrer">Edital da SECITEC</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://drive.google.com/file/d/1eWettKJ6VGWLbR_6wdvjweCF-bwRZ11B/view" target="_blank" rel="noopener noreferrer">Anexos do edital da SECITEC</a>
                                    </li>
                                </ul>
                            </li>
                            <div class="d-flex flex-column flex-md-column align-items-start align-items-lg-center d-lg-none text-center gap-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://drive.google.com/file/d/1IAMOV6S2GFdl9In0-BO000AVJ5RTlXML/view" target="_blank" rel="noopener noreferrer">Edital SECITEC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://drive.google.com/file/d/1eWettKJ6VGWLbR_6wdvjweCF-bwRZ11B/view" target="_blank" rel="noopener noreferrer">Anexos do edital da SECITEC</a>
                                </li>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="http://sistemascr.vhost.ifpb.edu.br/eventos/app/login" target="_blank" rel="noopener noreferrer" title="Fazer login no AdminLTE">Login <i class="fa-solid fa-unlock"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                $tema = $eventos->even_tema;
                $temaComAspas = "Tema: \"$tema\"";

                echo $temaComAspas;
                ?>
            </p>
            <div class="informacoes-evento">
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
            </div>
            <div class="botoes-header d-flex flex-center justify-content-center">
                <a class="btn header-btn d-flex align-items-center justify-content-center" id="saibaMais">Saiba
                    mais</a>
                <a class="btn header-btn d-flex align-items-center justify-content-center" id="contato">Contato</a>
            </div>
        </section>
    </header>
    <!--Main-->
    <main>
        <section class="main-container">
            <!-- Loader -->
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
            <!-- Sobre -->
            <section id="Sobre" class="py-5">
                <div>
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Sobre a SECITEC</h2>
                </div>
                <div class="d-flex align-items-center justify-content-center px-3 flex-column flex-lg-row">
                    <div class="pt-5 pe-3 reveal">
                        <p>
                            A 7ª. Semana de Ciência, Tecnologia e Cultura – SECITEC.CR-22 é um evento acadêmico de
                            incentivo à aprendizagem significativa por meio da solução de problemas com uso de método
                            científico e pensamento inovador. É o principal evento de Ciência & Tecnologia do nosso
                            Campus e tem os seguintes objetivos:
                        </p>
                        <ul class="list-unstyled text-left d-inline-block">
                            <li>
                                <p class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check text-danger"></i>
                                    Difundir nossa produção Científica, Tecnológica e Cultural (C&amp;TC-IFPB).
                                </p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check text-danger"></i>
                                    Oferecer palestras e oficinas sobre temas da atualidade.
                                </p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check text-danger"></i>
                                    Fortalecer o processo de curricularização da pesquisa e extensão.
                                </p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check text-danger"></i>
                                    Capacitar estudantes em metodologia das ciências.
                                </p>
                            </li>
                            <li>
                                <p class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check text-danger"></i>
                                    Disseminar C&amp;TC como fator condicionante da inovação e desenvolvimento.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <figure class="w-100 h-100 reveal">
                        <img class="w-100 h-100" src="./assets/geral/01.webp" alt="Banner de divulgação principal">
                    </figure>
                </div>
            </section>
            <!-- SECITEC'S passadas -->
            <section id="SECTIEC-passadas">
                <section class="descricao d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">SECITEC's passadas
                    </h2>
                </section>
                <div id="carousel" class="carousel slide reveal" data-bs-ride="carousel" data-bs-touch="true">
                    <div class="carousel-indicators">
                        <button data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="1"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="2"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="3"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="4"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="5"></button>
                        <button data-bs-target="#carousel" data-bs-slide-to="6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-2.jpeg/@@images/d4479dd8-afb2-4b6a-b2d9-85ae26ec39b6.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-alyce.jpeg/@@images/d8a463bc-5eb8-4fa5-bb55-d9cfc9f74f59.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-secretaria.jpeg/@@images/f5a2f1f1-60e8-44b3-825d-c046984c9524.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-tamisson.jpeg/@@images/51f282df-9d67-45c4-be90-b04a15e77baa.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/abertura-uepb.jpeg/@@images/50187065-1b6b-451a-af45-ec88d3577be1.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/anyconv-com__gincatec3.jpeg/@@images/a3f76d57-f3f4-4eeb-acd5-8fea2bacf83d.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.ifpb.edu.br/catoledorocha/noticias/2022/12/ifpb-catole-do-rocha-realiza-7o-semana-de-ciencia-tecnologia-e-cultura-nesse-mes-de-dezembro/anyconv-com__gincatec4.jpeg/@@images/50a6f1e6-1297-4315-aa51-460076614b48.jpeg" loading="lazy" draggable="false" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <!-- Programação -->
            <section id="Programacao" class="card-tabs py-5">
                <div class="d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Programação</h2>
                </div>
                <div class="datas d-flex flex-row justify-content-center align-items-center pt-3">
                    <ul class="btn-group py-3 px-3 d-flex justify-content-center flex-row flex-wrap reveal w-75 h-100 reveal tabs" role="group" aria-label="Button group">
                        <?php foreach ($datas as $index => $data) : ?>
                            <?php
                            $dataFormatada = date('dmY', strtotime($data->ativ_data));
                            $dataAtual = date('d/m/Y', strtotime($data->ativ_data));
                            $isActive = $index === 0 ? 'active' : '';
                            ?>
                            <li class="tab w-25">
                                <a class="btn btn-outline-danger w-100 <?= $isActive ?>" href="#<?= $dataFormatada; ?>"><?= $dataAtual; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="programacoes d-flex flex-column justify-content-center align-items-center w-100 reveal">
                    <div class="programacao-box px-3 w-75">
                        <?php
                        $contador = 0;
                        foreach ($datas as $index => $data) :
                            $dataFormatada = date('dmY', strtotime($data->ativ_data));
                            $dataAtual = date('d/m/Y', strtotime($data->ativ_data));
                            $isActive = $index === 0 ? 'active' : 'style="display: none"';
                        ?>
                            <div id="<?= $dataFormatada; ?>" <?= $isActive ?>>
                                <?php
                                foreach ($atividades as $atividade) :
                                    $horaFormatada = date('H:i', strtotime($atividade->ativ_hora));
                                    if ($atividade->ativ_data == $data->ativ_data) :
                                        $contador++;
                                ?>
                                        <div class="accordion accordion-flush atividade w-90" id="<?= $contador ?>">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $contador ?>" aria-expanded="false" aria-controls="collapse<?= $contador ?>">
                                                        <?= $horaFormatada . ' - ' . $atividade->ativ_nome ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse<?= $contador ?>" class="accordion-collapse collapse" data-bs-parent="#<?= $contador ?>">
                                                    <div class="border-bottom border-danger"></div>
                                                    <div class="accordion-body">
                                                        <?php
                                                        $convidadosExibidos = array();
                                                        foreach ($convidados as $convidado) :
                                                            if ($convidado->conv_atividade_id == $atividade->ativ_id) :
                                                                if (!in_array($convidado->usua_nome, $convidadosExibidos)) :
                                                                    array_push($convidadosExibidos, $convidado->usua_nome);
                                                        ?>
                                                                    <h6>Convidado(a):
                                                                        <?= $convidado->usua_nome ?>
                                                                    </h6>
                                                                <?php endif; ?>
                                                        <?php endif;
                                                        endforeach;
                                                        ?>
                                                        <p>
                                                            <?= $atividade->ativ_descricao ?>
                                                        </p>
                                                        <div class="border-bottom border-danger my-3"></div>
                                                        <div class="row">
                                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                                <h6 class="mb-0">Carga horária: </h6>
                                                                <p class="mb-0">
                                                                    <?= $atividade->ativ_carga_horaria ?><abbr title="Horas">h</abbr>
                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                                <h6 class="mb-0">Vagas:</h6>
                                                                <p class="mb-0">
                                                                    <?= $atividade->ativ_capacidade_total ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endif;
                                endforeach;
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- Parceiros -->
            <section id="Parceiros" class="d-flex flex-wrap flex-column align-items-center 
            justify-content-between w-100 h-100 py-3">
                <div class="d-flex justify-content-center align-items-center w-100 pt-3">
                    <h2 class="main-titulo d-flex align-items-start justify-content-center reveal">Parceiros</h2>
                </div>
                <figure class="d-flex justify-content-between align-items-center 
                flex-wrap flex-column pt-5 flex-lg-row w-50 reveal">
                    <img src="./assets/geral/logo-proexc.webp" alt="logo-proexc" class="object-fit-contain parceiro-logo" loading="lazy" draggable="false" title="Logo PROEXC">
                    <img src="./assets/geral/logo-uepb.webp" alt="logo-uepb" class="object-fit-contain parceiro-logo" loading="lazy" draggable="false" title="Logo UEPB">
                </figure>
            </section>
            <!-- Convidados -->
            <section id="Convidados" class="py-5 gap-3 d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Convidados</h2>
                </div>
                <div class="d-flex flex-row justify-content-center 
                align-items-center flex-wrap gap-5 pt-3 px-3 card-box">
                    <?php
                    function compararNomes($a, $b)
                    {
                        return strcmp($a->usua_nome, $b->usua_nome);
                    }

                    usort($convidados, 'compararNomes');

                    $convidadosExibidos = [];
                    foreach ($convidados as $convidado) {
                        if (!empty($convidado->usua_link_imagem) && !in_array($convidado->usua_email, $convidadosExibidos)) {
                            $convidadosExibidos[] = $convidado->usua_email;
                    ?>
                            <article class="card border border-secondary-subtle reveal">
                                <section class="card-image">
                                    <img src="<?php echo $convidado->usua_link_imagem; ?>" class="card-img-top" alt="..." draggable="false" loading="lazy">
                                </section>
                                <section class="card-body">
                                    <h3 class="card-title">
                                        <?php echo $convidado->usua_nome; ?>
                                    </h3>
                                    <button class="btn btn-modal btn-outline-secondary p-2 card-button" data-bs-toggle="modal" data-bs-target="#modal<?php echo $convidado->usua_email; ?>">Ver biografia</button>
                                </section>
                                <!-- Modal -->
                                <section class="modal fade" id="modal<?php echo $convidado->usua_email; ?>" aria-labelledby="modalLabel<?php echo $convidado->usua_email; ?>" aria-hidden="true">
                                    <section class="modal-dialog modal-dialog-centered">
                                        <section class="modal-content">
                                            <section class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalLabel<?php echo $convidado->usua_email; ?>">Biografia</h1>
                                                <button type="button" class="btn-close modal-button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </section>
                                            <section class="modal-body">
                                                <?php if (!empty($convidado->usua_biografia) && $convidado->usua_biografia != "1") : ?>
                                                    <p>
                                                        <?php echo $convidado->usua_biografia; ?>
                                                    </p>
                                                <?php else : ?>
                                                    <p>Nenhuma biografia encontrada para este(a) convidado(a)</p>
                                                <?php endif; ?>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </article>
                    <?php
                        }
                    }
                    ?>
                </div>
            </section>
            <!-- Endereço -->
            <section id="Endereco" class="pb-5">
                <section class="descricao d-flex justify-content-center align-items-center">
                    <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Faça-nos uma visita
                    </h2>
                </section>
                <section class="d-flex align-items-center justify-content-between  flex-column flex-lg-row w-100">
                    <section class="mapa reveal">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.407468947313!2d-37.756957024869514!3d-6.3412402936484815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a53bf74a6405cd%3A0x6f7892b812b2fd00!2sIFPB%20-%20Campus%20Catol%C3%A9%20do%20Rocha!5e0!3m2!1spt-BR!2sbr!4v1683920729658!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa de localização do IFPB - Campus Catolé do Rocha"></iframe>
                    </section>
                    <section class="localizacao">
                        <section class="endereco-completo text-center d-flex align-items-center justify-content-center reveal">
                            <table>
                                <tr>
                                    <th>Endereço</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $enderecoCompleto = $eventos->even_endereco;
                                        $enderecoSeparado = explode(',', $enderecoCompleto);
                                        $endereco = $enderecoSeparado[0];

                                        echo $endereco;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $enderecoCompleto = $eventos->even_endereco;
                                        $enderecoSeparado = explode(',', $enderecoCompleto);
                                        $numero = $enderecoSeparado[1];
                                        $numeroLimpo = str_replace('nº ', '', $numero);

                                        echo "Número: " . $numeroLimpo;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        echo "Cidade: " . $eventos->even_cidade . " - " . "<abbr title='Paraíba'>$eventos->even_estado</abbr>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><abbr title="Código de Endereçamento Postal">CEP</abbr>: 58884-000</td>
                                </tr>
                            </table>
                        </section>
                    </section>
                </section>
            </section>
            <!-- Contatos -->
            <section id="Contatos" class="pb-5">
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
                        <p><span class="contact-title">Envie um e-mail:</span> suporte@sistemascr.net</p>
                    </section>
                </section>
                <section class="d-flex flex-column flex-lg-row justify-content-around align-items-start text-center">
                    <section id="msg-box">
                        <h2 class="main-titulo d-flex align-items-center justify-content-center reveal">Ou nos deixe uma
                            mensagem</h2>
                    </section>
                    <?php
                    require './PHPMailer/src/Exception.php';
                    require './PHPMailer/src/PHPMailer.php';
                    require './PHPMailer/src/SMTP.php';

                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;

                    mb_internal_encoding('UTF-8');

                    date_default_timezone_set('America/Sao_Paulo');

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            try {
                                $mail = new PHPMailer(true);
                                $mail->isSMTP();
                                $mail->Host = "smtp.hostinger.com";
                                $mail->Port = 465;
                                $mail->SMTPSecure = 'ssl';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'suporte@sistemascr.net';
                                $mail->Password = 'Suporte2022#';

                                $mail->setFrom('suporte@sistemascr.net', 'Suporte do SistemasCR');
                                $mail->addAddress('suporte@sistemascr.net', 'Suporte do SistemasCR');

                                $mail->isHTML(true);
                                $mail->CharSet = 'UTF-8';
                                $mail->Subject = 'Mensagem do site da SECITEC';

                                $mail->Body = "
                                <div style='font-family: Arial, sans-serif;'>
                                    <h3>Olá, <strong>Suporte do SistemasCR</strong>!</h3>
                                    <p>Você recebeu uma mensagem através do site da SECITEC:</p>
                                    <p><strong>Nome:</strong> {$name}</p>
                                    <p><strong>Email:</strong> {$email}</p>
                                    <p><strong>Mensagem:</strong> {$message}</p>
                                    <p>Atenciosamente,<br>Seu site da SECITEC</p>
                                    <p><small>Esta mensagem foi enviada em <strong>" . date('d/m/Y') . "</strong> às <strong>" . date('H:i:s') . "</strong></small></p> 
                                </div>";

                                $mail->send();

                                // Limpar o formulário após o envio
                                $_POST['name'] = '';
                                $_POST['email'] = '';
                                $_POST['message'] = '';

                                echo <<<HTML
                                <script>
                                        window.location.href = 'mensagem_enviada.html';
                                </script>
                                HTML;
                                exit;
                            } catch (Exception $e) {
                                echo "<script>alert('Erro ao enviar mensagem: {$mail->ErrorInfo}');</script>";
                            }
                        }
                    }
                    ?>

                    <section id="contact-form">
                        <form class="w-100 d-flex flex-column justify-content-center align-items-center reveal" method="POST" accept-charset="utf-8">
                            <div class="group">
                                <input type="text" class="input" id="input-nome" name="name" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label" for="input-nome">Seu nome</label>
                            </div>
                            <div class="group">
                                <input type="email" class="input" id="input-email" name="email" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label" for="input-email">Seu melhor email</label>
                            </div>
                            <textarea class="form-control" rows="5" placeholder="Sua mensagem..." name="message" required spellcheck="true"></textarea>
                            <button class="form-button" type="submit">Enviar</button>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <!--Footer-->
    <footer class="d-flex flex-row justify-content-center align-items-start w-100 h-50">
        <section class="d-flex justify-content-start align-items-center flex-column w-100 h-100 reveal">
            <section class="footer-logo image-box d-flex justify-content-center align-items-center justify-content-lg-start">
                <img src="./assets/geral/logoSECITEC.webp" alt="Logo da 8ª SECITEC" loading="lazy" draggable="false" title="Logo da 8ª SECITEC" id="inicio">
            </section>
            <section class="d-flex flex-column flex-lg-row-reverse justify-content-center align-items-center justify-content-lg-start gap-5 w-100 h-50">
                <section class="social d-flex flex-row justify-content-center align-items-center justify-content-lg-end gap-3 w-100 h-50">
                    <a href="https://www.instagram.com/ifpbcatole.oficial" target="_blank" title="Instagram oficial do campus">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://pt-br.facebook.com/ifpbcatoledorocha" target="_blank" title="Facebook oficial do campus">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/@ifpb-catoledorocha221" target="_blank" title="Youtube oficial do campus">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </section>
                <section class="navigation ps-3">
                    <ul class="footer-list d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-start gap-3 w-100 h-50">
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
            <section class="copyright d-flex flex-column align-items-center align-items-lg-start justify-content-center w-100 h-50">
                <p>&copy; <span id="year"> </span> Todos os direitos reservados ao IFPB</p>
            </section>
        </section>
    </footer>

    <!--JavaScript-->
    <script src="./script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>

</html>