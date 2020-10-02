$(function (){
    $('button').bind('click', function (){
        var dados = {
            nome: $('#nome').val()
        }

        $.ajax({
            url: 'http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula29-projeto-ajax-no-mvc/ajax',
            type: 'POST',
            data: dados,
            dataType: 'json',
            success: function (json){
                //$('.borda').html(json);
                $('.borda').html(json.frase);
            }
        });
    });
});