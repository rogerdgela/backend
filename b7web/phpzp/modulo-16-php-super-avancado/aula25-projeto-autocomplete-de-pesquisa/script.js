$(function (){
    $('#busca').on('keyup', function (){
        var texto = $(this).val();

        $.ajax({
            type: 'post',
            url: 'busca.php',
            data: {texto:texto},
            dataType: 'json',
            success: function (json){
                var html = '';
                for (var i in json){
                    html += '<li><a href="usuario.php?id=' + json[i].id + '">' + json[i].nome + '</a></li>'
                }
                $('#resultado').html(html);
            }

        });

        /*$.ajax({
            type: 'post',
            url: 'busca.php',
            data: {texto:texto},
            success: function (html){
                $('#resultado').html(html);
            }

        });*/
    });
});