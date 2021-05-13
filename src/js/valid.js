$(document).ready(function(){
    $(".validation").hide();
  
    $("#table-register").submit(function(){
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        var email=$("input[name='register-email']").val();

        if($("#senha").val()==$("#c_senha").val() && email.match(pattern)){
            return true;
        }else{
            alert("Alguns campos estão invalidos \n verifique-os e tente novamente")
            return false
        }
    })

    $(".email").keyup(function(){
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        var email=$("input[name='register-email']").val();
        var validemail= $(".validation").eq(0);

        if(email.match(pattern)){
            $("input[name='register-email']").addClass("valid")
            $("input[name='register-email']").removeClass("invalid")
           validemail.show();
           validemail.addClass("valid");
           validemail.removeClass("invalid");
           validemail.html("Email Válido");

        }else{
            $("input[name='register-email']").removeClass("valid")
            $("input[name='register-email']").addClass("invalid")
            validemail.show();
            validemail.removeClass("valid");
            validemail.addClass("invalid");
            validemail.html("Email Inválido");
        }
    })

    $("#c_senha").keyup(function(){
        var validsenha= $(".validation").eq(1);

        if($(this).val()==$("#senha").val()){

            $(".senha").addClass("valid")
            $(".senha").removeClass("invalid")

            validsenha.show();
            validsenha.addClass("valid");
            validsenha.removeClass("invalid");
            validsenha.html("Senhas Confirmada");
        }else{
            
            $(".senha").removeClass("valid")
            $(".senha").addClass("invalid")

            validsenha.show();
            validsenha.removeClass("valid");
            validsenha.addClass("invalid");
            validsenha.html("Senhas Distintas");

          
        }
    })

})