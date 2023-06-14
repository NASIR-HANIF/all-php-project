$(document).ready(function(){
    $("#email").on("input",function(){
        $.ajax({
            type : "POST",
            url : "checkuser.php",
            data : {
            
                username : $(this).val()
            },
            beforeSend : function(){
                $("#email-msg").html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
            },
            
            success : function(response){
               if(response == "data found"){
                 $("#email-msg").html('<i class="fa-regular fa-circle-xmark"></i>');
                $("button").attr("disabled",true);
               }else{
                 $("#email-msg").html('<i class="fa-solid fa-check"></i>');
                $("button").removeAttr("disabled");
               }
            }
        })
    })
})