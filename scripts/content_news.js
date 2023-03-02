$(".btn_news").on("click", function () {
    switch ($(this).attr("class")) {
        case "container_copy":
            var conteudo = "conteudo 1";
            break;
    }
    $("div").text(conteudo);
    $("div").slideToggle();
});
