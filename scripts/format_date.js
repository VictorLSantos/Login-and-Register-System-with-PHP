function pad(valor) {
    // completa com zeros à esquerda, caso necessário
    return valor.toString().padStart(2, "0");
}

function formata(data) {
    return `${data.getFullYear()}-${pad(data.getMonth() + 1)}-${pad(
        data.getDate()
    )}`;
}

const campo = document.querySelector("#date_input");

window.addEventListener("DOMContentLoaded", function () {
    var data = new Date(); // data de hoje
    campo.min = formata(data);
    // 2 anos à frente
    data.setFullYear(data.getFullYear() + 10);
    campo.max = formata(data);
});
