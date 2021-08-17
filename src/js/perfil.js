$(document).ready(function(){
    /*ao iniciar a tela, todos esses elementos ficam escondidos, só vão aparecer quando forem acionados*/
    $(".ata_select").hide();
    $(".fa-eye").hide();
    $(".container_password").hide();
    
    //Exibir tela de editar perfil, todos as telas com a classe .ata_select serão escondidas junto com a tela de bem vindo e a tela com a função show, é a tela que será exibida
    $("#btn_edit").click(function(){
        $(".ata_select").hide();
        $("#apresent").hide();
        $("#edit_perfil").show();
    })
//Exibir tela de projetos excluidos
    $("#btn_pjex").click(function(){
        $(".ata_select").hide();
        $("#apresent").hide();
        $("#proj_exc").show();
    })
//Exibir tela de segurança
    $("#btn_security").click(function(){
        $(".ata_select").hide();
        $("#apresent").hide();
        $("#security").show();
    })

    /*Exibir valor input senha atual, esconde os icones que estão presentes, e faz aperecer os icones que iniciaram escondidos na página com a função hide no inicio do js*/
    $("#show_pass").click(function(){
        $("#show_pass").hide();//esconde o icone com esse id que foi passado
        $("#hide_pass").show();//aparece o icone que estava escondido

        $("#inp_pass").attr("type","text");//o input muda o atributo type de password para text, assim exibindo o valor digitado
    })

       //Esconder valor input senha atual
       $("#hide_pass").click(function(){
        $("#hide_pass").hide();
        $("#show_pass").show();

        $("#inp_pass").attr("type","password");//o input muda o atributo type de text para password, assim escondendo o valor digitado
    })
//Exibir valor input confirmar senha
    $("#show_confpass").click(function(){
        $("#show_confpass").hide();
        $("#hide_confpass").show();

        $("#conf_newpass").attr("type","text");
    })

        //Esconder valor input confirmar senha 
        $("#hide_confpass").click(function(){
            $("#hide_confpass").hide();
            $("#show_confpass").show();
    
            $("#conf_newpass").attr("type","password");
        })

      //Exibir valor input Nova senha
      $("#show_newpass").click(function(){
        $("#show_newpass").hide();
        $("#hide_newpass").show();

        $("#inp_newpass").attr("type","text");
    })

       //Esconder valor input Nova senha
       $("#hide_newpass").click(function(){
        $("#hide_newpass").hide();
        $("#show_newpass").show();

        $("#inp_newpass").attr("type","password");
    })

     /*Exibir container_password, quando clicar no checkbox, if verifica se está checkado, se estiver irá exibir o container para trocar o password se não estiver checkado irá esconder o container dos inputs password*/
     $("#btn_pass").click(function(){
         if($("#btn_pass").prop("checked")){
            $(".container_password").show();
         }else{
            $(".container_password").hide();
         }
     
    })

    /*validação da senha, faz a validação da senha e da confirmação de senha, verifica se ambos estão iguais, se estiverem retorna true para o formulário, caso contrário return false e não permite que as informações sejam enviadas para o php */
    $(".perfil_edit").submit(function(){
        if($("#inp_newpass").val()==$("#conf_newpass").val()){
            return true;
        }else{
            alert("Alguns campos estão invalidos \n verifique-os e tente novamente")
            return false
        }
    })
})