$(document).ready(function(){
    $(".ata_select").hide();
    
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
//Exibir tela de tickets
    $("#btn_ticket").click(function(){
        $(".ata_select").hide();
        $("#apresent").hide();
        $("#ticket").show();
    })
})