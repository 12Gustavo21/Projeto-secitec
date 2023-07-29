// Função que é executada quando o documento estiver pronto
$(document).ready(function () {
    // Seleciona o elemento do cabeçalho pelo ID
    const headerBox = document.querySelector("#caixaHeaderUm");

    // Variável para armazenar a posição de rolagem anterior
    let prevScrollPos = window.scrollY || document.documentElement.scrollTop;

    // Evento de rolagem adicionado à janela (página)
    window.addEventListener("scroll", function () {
        // Obtém a posição de rolagem atual
        const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

        // Verifica a direção da rolagem e a posição atual para mostrar/esconder o cabeçalho
        if (prevScrollPos < currentScrollPos && currentScrollPos > 100) {
            headerBox.classList.remove("visible");
            headerBox.classList.add("hidden");
        } else if (currentScrollPos === 0) {
            headerBox.classList.remove("hidden");
            headerBox.classList.remove("visible");
        } else {
            headerBox.classList.add("visible");
            headerBox.classList.remove("hidden");
        }
        prevScrollPos = currentScrollPos;
    });

    // Código para rolar suavemente até as seções quando os botões são clicados

    // Seleciona os elementos de navegação, botões do cabeçalho e imagens
    var navIten = $(".nav-item");
    var headerBtn = $(".header-btn");
    var imageBox = $(".image-box");

    // Seleciona as seções do site pelos seus IDs
    var inicio = $("header");
    var sobre = $("#Sobre");
    var convidados = $("#Convidados");
    var contatos = $("#Contatos");
    var programacao = $("#Programacao");

    var scrollTo = "";

    // Quando um item de navegação é clicado, identifica a seção correspondente e faz a rolagem suave até ela
    $(navIten).click(function () {
        var btnId = $(this).attr("id");

        // Mapeia o ID do botão para a seção correspondente
        if (btnId == "inicio") {
            scrollTo = inicio;
        } else if (btnId == "sobre") {
            scrollTo = sobre;
        } else if (btnId == "convidados") {
            scrollTo = convidados;
        } else if (btnId == "contatos") {
            scrollTo = contatos;
        } else if (btnId == "programacao") {
            scrollTo = programacao;
        } else {
            scrollTo = inicio;
        }

        // Anima a rolagem suave até a seção
        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    // Quando um botão do cabeçalho é clicado, identifica a seção correspondente e faz a rolagem suave até ela
    $(headerBtn).click(function () {
        var btnId = $(this).attr("id");

        // Mapeia o ID do botão para a seção correspondente
        if (btnId == "saibaMais") {
            scrollTo = sobre;
        } else if (btnId == "contato") {
            scrollTo = contatos;
        } else {
            scrollTo = inicio;
        }

        // Anima a rolagem suave até a seção
        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    // Quando uma imagem é clicada, identifica a seção correspondente e faz a rolagem suave até ela
    $(imageBox).click(function () {
        var btnId = $(this).attr("id");

        // Mapeia o ID da imagem para a seção correspondente (nesse caso, sempre rola para o início)
        if (btnId == "inicio") {
            scrollTo = inicio;
        } else {
            scrollTo = inicio;
        }

        // Anima a rolagem suave até a seção
        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    // Efeito de revelação (fadeIn) em elementos quando o usuário rola a página

    // Função que aplica o efeito de revelação nos elementos com a classe "reveal"
    function fadeInElements() {
        // Seleciona todos os elementos com a classe "reveal"
        var reveals = document.getElementsByClassName("reveal");

        // Itera sobre os elementos com a classe "reveal" para aplicar o efeito
        for (var i = 0; i < reveals.length; i++) {
            var element = reveals[i];
            var position = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
            var revealPoint = 150;

            // Verifica se o elemento está próximo o suficiente da parte inferior da janela para ser revelado
            if (position < windowHeight - revealPoint) {
                element.style.opacity = "1";
                element.style.transform = "translateY(0)";
            } else {
                element.style.opacity = "0";
                element.style.transform = "translateY(50px)";
            }
        }
    }

    // Adiciona o evento de rolagem para acionar a função de revelação quando o usuário rola a página
    window.addEventListener("scroll", fadeInElements);
    window.addEventListener("resize", fadeInElements);

    // Funções para adicionar, remover e alternar a classe "reveal" em cartões
    function removeRevealClass(card) {
        card.classList.remove("reveal");
        card.removeAttribute("style");
    }

    function addRevealClass(card) {
        card.classList.add("reveal");
    }

    function toggleRevealClass(event) {
        var button = event.target;
        var card = button.closest(".card");

        // Verifica se o cartão não possui a classe "reveal" e a adiciona; caso contrário, remove e, após um atraso de 5 segundos, adiciona novamente
        if (!card.classList.contains("reveal")) {
            addRevealClass(card);
        } else {
            removeRevealClass(card);
            setTimeout(function () {
                if (card.classList.contains("reveal")) {
                    removeRevealClass(card);
                } else {
                    addRevealClass(card);
                }
            }, 5000);
        }
    }

    // Seleciona todos os botões com a classe "btn-modal" e adiciona o evento de clique para alternar a classe "reveal"
    var btnModal = document.querySelectorAll(".btn-modal");
    btnModal.forEach(function (button) {
        button.addEventListener("click", toggleRevealClass);
    });

    // Exibe o ano atual no elemento com o ID "year"
    const year = document.getElementById("year");
    year.textContent = new Date().getFullYear();

    // Validação de campos de entrada

    // Seleciona todos os campos de entrada e adiciona eventos de entrada para realizar a validação
    $('input').each(function (i) {
        $(this).on('input', function () {
            var isActiveLabel = $('label').eq(i).hasClass('active');
            var isInputEmpty = $(this).val().trim() === '';

            // Adiciona ou remove a classe "validation" com base na validação
            $(this).toggleClass('validation', isActiveLabel && !isInputEmpty);
            $('.bar').eq(i).toggleClass('validation', isActiveLabel && !isInputEmpty);
            $('.highlight').eq(i).toggleClass('validation', isActiveLabel && !isInputEmpty);
        });
    });
});

// Loader de carregamento

// Seleciona o elemento com a classe "loader" e o corpo da página
const loader = document.querySelector(".loader");
const body = document.querySelector("body");

// Evento antes de descarregar a página para rolar suavemente até o topo
window.addEventListener("beforeunload", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// Evento de carga para ocultar o loader e permitir a rolagem do corpo
window.addEventListener("load", () => {
    loader.style.display = "none";
    body.style.overflow = "auto";
});

// Evento de progresso (incompleto, pois "progress" não é um evento nativo)
window.addEventListener("progress", (event) => {
    const { loaded, total } = event;
    const progress = (loaded / total) * 100;
    loader.style.display = `${progress}%`;
});