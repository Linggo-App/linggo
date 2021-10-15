$(document).ready(function(){
    $(".validation").hide();//esconde o texto que aponta se o input está válido ou inválido
  
    /*faz a verificação dos campos email e senha, se estiverem válidos retorna true e envia os dados para o php, caso contrário, retorna false e não envia os dados*/
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

    /*faz a validação do email em tempo real com keyup*/
    $(".email").keyup(function(){
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        var email=$("input[name='register-email']").val();
        var validemail= $(".validation").eq(0);

      //verifica se a estrutura passado no valor do input está correta
        if(email.match(pattern)){
            /*adiciona a classe valid e remove a classe invalid no css*/
            $("input[name='register-email']").addClass("valid")
            $("input[name='register-email']").removeClass("invalid")
           validemail.show();//exibe o elemento html que estava escondido no inicio do js
           validemail.addClass("valid");//adiciona a classe valid ao elemento html
           validemail.removeClass("invalid");//remove a classe invalid que estava no elemento
           validemail.html("Email Válido");//adiciona o texto no elemento para sinalizar se está valido ou não

        }else{
            /*se o email estiver invalido, as linhas farão o inverso das notas citadas acima*/
            $("input[name='register-email']").removeClass("valid")
            $("input[name='register-email']").addClass("invalid")
            validemail.show();
            validemail.removeClass("valid");
            validemail.addClass("invalid");
            validemail.html("Email Inválido");
        }
    })

    /*faz a validação da senha em tempo real */
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