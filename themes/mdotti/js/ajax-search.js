jQuery(document).ready(function ($) {
    $('.search input[name="s"]').on('keyup', function () {
        let query = $(this).val();

        // Faz a requisição AJAX
        $.ajax({
            url: ajaxSearch.ajax_url,
            type: 'POST',
            data: {
                action: 'ajax_search',
                query: query,
            },
            beforeSend: function () {
                // Adiciona um efeito de fade-out antes de exibir os novos resultados
                $('#search-results').fadeOut(200, function () {
                    $(this).html('<p>Buscando...</p>').fadeIn(200);
                });
            },
            success: function (response) {
                // Substitui o conteúdo com efeito de fade-in
                $('#search-results').fadeOut(200, function () {
                    $(this).html(response).fadeIn(200);
                });
            },
            error: function () {
                // Mostra a mensagem de erro com efeito de fade-in
                $('#search-results').fadeOut(200, function () {
                    $(this).html('<p>Erro ao buscar registros.</p>').fadeIn(200);
                });
            },
        });
    });
});

