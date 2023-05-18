$(document).on('click', '.delete-button', function(event) {
    event.preventDefault();

    var url = $(this).data('url');
    var csrfToken = document.getElementsByName("_token")[0].value;

    $.ajax({
        url: url,
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            // Exibição de mensagem de sucesso, atualização da lista, etc.
        },
        error: function(error) {
            // Tratamento de erros, exibição de mensagem de erro, etc.
        }
    });
});
