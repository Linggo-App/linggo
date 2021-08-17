$(document).ready(function(){//iniciando as funções com Jquery
      //Controle do modal

        //abrir modal, ao pressionar o creare_schedule, adiciona a classe active no modal que faz ele aparecer, tanto o modal quanto o overlay
    $(".create_schedule").click(function(){
        $(".modal").addClass("active");
        $(".overlay").eq(1).addClass("active");
    })
    
        //fechar modal, ao pressionar o botão close, remove a classe active do modal e do overlay
    $(".close").click(function(){
        $(".modal").removeClass("active");
        $(".overlay").eq(1).removeClass("active");
    })
    
     //fechar modal, ao pressionar o overlay, remove a classe active do modal e do overlay
    $(".overlay").eq(1).click(function(){
        $(".modal").removeClass("active");
        $(".overlay").eq(1).removeClass("active");
    })
     

    //Opções de cores, ao pressionar o botão open_colors, o modal color recebe a classe active que o faz surgir na tela
    $(".open_colors").click(function(){
        $(".modal_color").addClass("active");
        $(".overlay").eq(0).addClass("active");
    })

    //fechar modal_color, ao pressionar o botão close, remove a classe active do modal_color e do overlay
    $(".close_color").click(function(){
        $(".modal_color").removeClass("active")
        $(".overlay").eq(0).removeClass("active");
    })

    //fechar modal_color, ao pressionar o overlay, remove a classe active do modal_color e do overlay
    $(".overlay").eq(0).click(function(){
        $(".modal_color").removeClass("active");
        $(".overlay").eq(0).removeClass("active");
    })
     
    
    /*ao clicar no botão ok, a var color, separa os input radio em array e depois os mapeiam para capturar qual desses inputs estão checkados e assim retorna o valor de input para a variavel color, e utilizando esse valor ele é passado para o background-color dos elementos e ao mesmo tempo remove a class active do modal_color e do overlay*/
    $("#ok_btn").click(function(){
      var color=$("input[name='color_agenda']:checked").toArray().map(function(check){
          return $(check).val();
      })

      $('.open_colors').css({"background-color":color})
      $('#pallet').css({"background-color":color})
      $(".modal_color").removeClass("active")
        $(".overlay").eq(0).removeClass("active");
        
    })

    //modal settings
 /*   $(".schedule_update").click(function(){
        $(".settings").addClass("active");
        
    })

    $(".close_settings").click(function(){
        $(".settings").removeClass("active");
       
    })*/


});