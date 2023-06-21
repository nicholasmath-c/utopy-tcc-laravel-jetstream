$("#price").on("keyup", function () {
    var valor = $(this).val().replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    var valorFormatado = "";

    if (valor.length > 2) {
        valorFormatado = "R$ " + Number(valor.substr(0, valor.length - 2)).toLocaleString("pt-BR") + "," +
            valor.substr(-2);
    } else if (valor.length === 2) {
        valorFormatado = "R$ 0," + valor;
    } else if (valor.length === 1) {
        valorFormatado = "R$ 0,0" + valor;
    } else {
        valorFormatado = "R$ 0,00";
    }

    $(this).val(valorFormatado);
});

$("#discount").on("keyup", function () {
    var valor = $(this).val().replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    var valorFormatado = "";

    if (valor.length > 2) {
        valorFormatado = "R$ " + Number(valor.substr(0, valor.length - 2)).toLocaleString("pt-BR") + "," +
            valor.substr(-2);
    } else if (valor.length === 2) {
        valorFormatado = "R$ 0," + valor;
    } else if (valor.length === 1) {
        valorFormatado = "R$ 0,0" + valor;
    } else {
        valorFormatado = "R$ 0,00";
    }

    $(this).val(valorFormatado);
});

$('#form').on('submit', function () {
    $input = $('#price').val().replace(/[^\d,]/g, "").replace(",", ".");
    $input = $('#discount').val().replace(/[^\d,]/g, "").replace(",", ".");

    $("#price").val($input);
    $("#discount").val($input);
});

ClassicEditor.create(document.querySelector('#long_description'), {

  }).catch(error => {
    console.error(error);
  });
