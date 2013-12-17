$(document).ready(function(){

    $("input#btnLogar").click(function(){
        if($("#frmLogin")[0].checkValidity()) {
            $.ajax({
                type: "POST",
                url: "php/authentication.php",
                data: $("#frmLogin").serialize(),
                dataType: 'json',
                success: function(msg){
                    if (msg[0] == "success") {
                        alertSignupSuccess(msg[1]);
                    } else {
                        alertSignupError(msg[1]);
                    }
                }
            });
        } else {
            $("#sbmLogar").trigger("click");
        }
        
    });

    function alertSignupError(msg) {
        // alert('Usuário ou Senha Incorretos!');
    }

    function alertSignupSuccess(msg) {
        // alert('Agente Registrado com Sucesso!');
        window.location.href="enrollments.php";
    }

});
