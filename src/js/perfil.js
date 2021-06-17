$(document).ready(function(){
    $(".ata_select").hide();
    $(".fa-eye").hide();
    $(".container_password").hide();
    
    //Exibir tela de editar perfil
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

    //Exibir valor input senha atual
    $("#show_pass").click(function(){
        $("#show_pass").hide();
        $("#hide_pass").show();

        $("#inp_pass").attr("type","text");
    })

       //Esconder valor input senha atual
       $("#hide_pass").click(function(){
        $("#hide_pass").hide();
        $("#show_pass").show();

        $("#inp_pass").attr("type","password");
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

     //Exibir container_password
     $("#btn_pass").click(function(){
         if($("#btn_pass").prop("checked")){
            $(".container_password").show();
         }else{
            $(".container_password").hide();
         }
     
    })

    //validação da senha
    $(".perfil_edit").submit(function(){
        if($("#inp_newpass").val()==$("#conf_newpass").val()){
            return true;
        }else{
            alert("Alguns campos estão invalidos \n verifique-os e tente novamente")
            return false
        }
    })
})