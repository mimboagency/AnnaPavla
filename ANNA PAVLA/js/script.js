var isopen = false; 
$( document ).ready(function() {    
    if ($(".btnkatalog").html()!=undefined){       
        function open(){
            if(isopen==false){
                isopen=true;
                $(".forma").addClass("open");
                offset=$(window).scrollTop()+parseInt($(".forma").css("top").split("px")[0]);
                $(".forma").css("top",  offset);
                $(".closeblock").addClass("open");
            }
            else{
                isopen=false;
                $(".forma").attr("style", "");
                $(".forma").removeClass("open");
                $(".closeblock").removeClass("open");
                $(".error").removeClass("open");
            }
        }
        $(".forbtnform").click(function(){
            if ($(".forma input").eq(0).val()!="" && ($(".forma input").eq(1).val()!="" && $(".forma input").eq(2).val()!="")){
               var sd = $(this).parent().serialize();
               $.ajax({
                    type: "POST",
                    url: "/send.php",
                    dataType: "text",
                    data: sd,
                    success: function (html) {
                    open();  
                    },
                });               
            } 
             else{
                $(".error").addClass("open");
            }             
         });
         $(".forbtn").click(function(){
             open();
         });
         $(".closeblock").click(function(){
             open();
         });
    }   
});
 
