$(document).ready(function(){
      //Controle do modal

        //abrir modal
    $(".create_schedule").click(function(){
        $(".modal").addClass("active");
        $(".overlay").addClass("active");
    })   
        //fechar modal

    $(".close").click(function(){
        $(".modal").removeClass("active");
        $(".overlay").removeClass("active");
    })
    $(".overlay").click(function(){
        $(".modal").removeClass("active");
        $(".overlay").removeClass("active");
    })
     

    //Criar opções de cores
    $(".open_colors").click(function(){
        $(".modal_color").addClass("active");
    })

    $(".close_color").click(function(){
        $(".modal_color").removeClass("active")
    })


});