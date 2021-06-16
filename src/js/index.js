$(document).ready(function(){
    const left=$(".fa-chevron-left");
    const right=$(".fa-chevron-right");
    var i=0;
    var container="cadastro";

    // alert( $(window).scrollTop())

    reset();
    criar_titulo();
    // criar_dotteds();

    function reset(){
        $(".prints").hide();
        $("."+container).show();
        criar_dotteds();
        $(".dotted").eq(i).addClass("active")

    }

    function criar_dotteds(){
        var dotted=[];
        $("#dotteds").empty();

        for(c=0;c<$("."+container).length;c++){
            dotted[c]=$('<span></span>');
            dotted[c].addClass("dotted");
             $("#dotteds").append(dotted[c]);
            //alert(c)
        }
    }

    function criar_titulo(){
        var title=$('<h1>'+container+'</h1>');
        $(".prints .title").empty();

        title.addClass("title");
        $(".prints").append(title);
    }

    left.click(function(){
        i--;
        $("."+container).eq(i).show();
       
  
        for(c=0;c<$(".dotted").length;c++){
          $(".dotted").removeClass("active")
        }
        
        $(".dotted").eq(i).addClass("active")
        if(i<0){
            i=$("."+container).length-1;
            $(".prints").hide();
            $("."+container).eq(i).show();
        }
    })

    right.click(function(){
      $("."+container).eq(i).hide();
      i++;

      for(c=0;c<$(".dotted").length;c++){
        $(".dotted").removeClass("active")
      }

      $(".dotted").eq(i).addClass("active")
      if(i>=$("."+container).length){
          i=0;
          reset();
      }
    })

    $(".buttons button").click(function(){
        container=this.value;
        i=0;

        $(window).scrollTop(1525);
      
        reset();
        criar_titulo();
       
        //alert(container);
    })

   
})