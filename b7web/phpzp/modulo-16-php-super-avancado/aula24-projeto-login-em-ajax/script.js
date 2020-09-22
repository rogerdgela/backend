$(function (){
    $('#form').on('submit', function (e){
       e.preventDefault();

       var email = $('input[name=email]').val();
       var senha = $('input[name=password]').val();

       var dados = {
           email: email,
           senha: senha
       };

       $.ajax({
           type: 'POST',
           url: 'login.php',
           data: dados,
           contentType: false,
           processData: false,
           success: function (msg){
               alert(msg);
           }
       });
    });
});