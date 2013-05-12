$(document).ready(function(){

    $('.call').click(function(){

        if($(this).data('method') == "request_salt")
        {
            if(confirm("Sure you want to regenerate your salt?\n Be sure to update your gamify.class.php file with the returned value.")){
                ajax_call($(this).data('method'), $(this).data());
            }
        }
        else
        {
            ajax_call($(this).data('method'), $(this).data());
        }
   });


    function ajax_call(method, params)
    {
        $.ajax({
            url     : 'ajax.php',
            type    : "post",
            data    : {
                method : method,
                params : params
            },
            success : function(data){
                $("#ajax_reply").html(data);
            }
        });
    }

});