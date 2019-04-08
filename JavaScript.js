$(document).ready(function() {
    $("#FormCadastro").on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: 'Controller/ControllerCadastro.php',
            type: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.resultado').show().html(Dados);
            }
        });
    });
});﻿