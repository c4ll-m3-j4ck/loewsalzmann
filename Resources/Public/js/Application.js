jQuery(document).ready(function(jQuery) {

    jQuery(".intro-right .face-wrapper").click( function (event) {
        event.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery(".intro-left").toggleClass("right-active");
    })

    jQuery(".submit").click(function() {
        //get input field values
        var user_name       = jQuery('input[name=InputName]').val();
        var user_email      = jQuery('input[name=InputEmail]').val();
        var user_phone      = jQuery('input[name=InputPhone]').val();
        var user_message    = jQuery('textarea[name=InputMessage]').val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){
            jQuery("#name").addClass( "has-error" );
            proceed = false;
        }
        if(user_email==""){
            jQuery("#email").addClass( "has-error" );
            proceed = false;
        }
        if(user_message=="") {
            jQuery("#message").addClass( "has-error" );
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed)
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};

            //Ajax post data to server
            jQuery.post('mail.php', post_data, function(response){

                //load json data from server and output message
                if(response.type == 'error')
                {
                    output = '<div class="alert alert-danger">'+response.text+'</div>';
                }else{

                    output = '<div class="alert alert-success">'+response.text+'</div>';

                    //reset values in all input fields
                    jQuery("#contact").hide("slow");
                }

                jQuery("#result").hide().html(output).slideDown();
            }, 'json');

        }
    });

    //reset previously set border colors and hide all message on .keyup()
    jQuery("#contact input, #contact textarea").keyup(function() {
        jQuery("#contact div").removeClass( "has-error");
        jQuery("#result").slideUp();
    });

});



