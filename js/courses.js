$(document).ready(function(){

    $("input#btnCadastrar").click(function(){
        if($("#frmCurso")[0].checkValidity()) {
            $.ajax({
                type: "POST",
                url: "php/createCourse.php",
                data: $("#frmCurso").serialize(),
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
            $("#sbmCurso").trigger("click");
        }
        
    });

    function alertSignupError() {
        alert('Falha na Gravação!');
    }

    function alertSignupSuccess() {
        alert('Curso Cadastrado com Sucesso!');
        window.location.href="courses.php";
    }

});
