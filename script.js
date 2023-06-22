$(document).ready(function () {
    const headerBox = document.querySelector("#caixaHeaderUm");
    let prevScrollPos = window.scrollY || document.documentElement.scrollTop;

    window.addEventListener("scroll", function () {
        const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

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

    //Scrollar até as seções
    var navIten = $(".nav-item");
    var headerBtn = $(".header-btn");
    var imageBox = $(".image-box");

    var inicio = $("header");
    var sobre = $("#Sobre");
    var convidados = $("#Convidados");
    var contatos = $("#Contatos");
    var programacao = $("#Programacao");

    var scrollTo = "";

    $(navIten).click(function () {
        var btnId = $(this).attr("id");

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

        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    $(headerBtn).click(function () {
        var btnId = $(this).attr("id");

        if (btnId == "saibaMais") {
            scrollTo = sobre;
        } else if (btnId == "contato") {
            scrollTo = contatos;
        } else {
            scrollTo = inicio;
        }

        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    $(imageBox).click(function () {
        var btnId = $(this).attr("id");

        if (btnId == "inicio") {
            scrollTo = inicio;
        } else {
            scrollTo = inicio;
        }

        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top - 70,
            },
            100
        );
    });

    /*Animate*/
    function fadeInElements() {
        var reveals = document.getElementsByClassName("reveal");

        for (var i = 0; i < reveals.length; i++) {
            var element = reveals[i];
            var position = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
            var revealPoint = 150;

            if (position < windowHeight - revealPoint) {
                element.style.opacity = "1";
                element.style.transform = "translateY(0)";
            } else {
                element.style.opacity = "0";
                element.style.transform = "translateY(50px)";
            }
        }
    }

    window.addEventListener("scroll", fadeInElements);
    window.addEventListener("resize", fadeInElements);

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
            }, 2000);
        }
    }

    var btnModal = document.querySelectorAll(".btn-modal");
    btnModal.forEach(function (button) {
        button.addEventListener("click", toggleRevealClass);
    });

    const year = document.getElementById("year");
    year.textContent = new Date().getFullYear();

    $('input').each(function (i) {
        $(this).on('input', function () {
            var isActiveLabel = $('label').eq(i).hasClass('active');
            var isInputEmpty = $(this).val().trim() === '';

            $(this).toggleClass('validation', isActiveLabel && !isInputEmpty);
            $('.bar').eq(i).toggleClass('validation', isActiveLabel && !isInputEmpty);
            $('.highlight').eq(i).toggleClass('validation', isActiveLabel && !isInputEmpty);
        });
    });

});

//Loader
const loader = document.querySelector(".loader");
const body = document.querySelector("body");

window.addEventListener("beforeunload", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

window.addEventListener("load", () => {
    loader.style.display = "none";
    body.style.overflow = "auto";
});

window.addEventListener("progress", (event) => {
    const { loaded, total } = event;
    const progress = (loaded / total) * 100;
    loader.style.display = `${progress}%`;
});