$(document).ready(function(){

    $("input#btnEnroll").click(function(){
        if($("#frmEnrollment")[0].checkValidity()) {
            $.ajax({
                type: "POST",
                url: "php/createEnroll.php",
                data: $("#frmEnrollment").serialize(),
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
            $("#sbmEnroll").trigger("click");
        }
        
    });

    function alertSignupError() {
        alert('Falha na Gravação!');
    }

    function alertSignupSuccess() {
        alert('Matrícula Realizada com Sucesso!');
        window.location.href="enrollments.php";
    }

});
