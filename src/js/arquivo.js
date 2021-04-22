$(document).ready(function(){
      //Controle do modal

        //abrir modal
    $(".create_schedule").click(function(){
        $(".modal").addClass("active");
        $(".overlay").eq(1).addClass("active");
    })   
        //fechar modal

    $(".close").click(function(){
        $(".modal").removeClass("active");
        $(".overlay").eq(1).removeClass("active");
    })
    $(".overlay").eq(1).click(function(){
        $(".modal").removeClass("active");
        $(".overlay").eq(1).removeClass("active");
    })
     

    //Opções de cores
    $(".open_colors").click(function(){
        $(".modal_color").addClass("active");
        $(".overlay").eq(0).addClass("active");
    })

    $(".close_color").click(function(){
        $(".modal_color").removeClass("active")
        $(".overlay").eq(0).removeClass("active");
    })

    $(".overlay").eq(0).click(function(){
        $(".modal_color").removeClass("active");
        $(".overlay").eq(0).removeClass("active");
    })
     

    $("#ok_btn").click(function(){
      var color=$("input[name='color_agenda']:checked").toArray().map(function(check){
          return $(check).val();
      })

      $('.open_colors').css({"background-color":color})
      $('#pallet').css({"background-color":color})
        
    })

    


});