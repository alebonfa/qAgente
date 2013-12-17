$(document).ready(function(){

    $("input#btnCadastrar").click(function(){
        if($("#frmAgente")[0].checkValidity()) {
            $.ajax({
                type: "POST",
                url: "php/register.php",
                data: $("#frmAgente").serialize(),
                dataType: 'json',
                success: function(msg){
                    if (msg[0] == "success") {
                        alertSignupSuccess();
                    } else {
                        alertSignupError();
                    }
                }
            });
        } else {
            alert('Faltam Dados!');
            $("#sbmCadastrar").trigger("click");
        }
        
    });

    function alertSignupError() {
        alert('Falha na Gravação!');
    }

    function alertSignupSuccess() {
        alert('Agente Cadastrado com Sucesso!');
        window.location.href="agents.php";
    }

});
