/*function formSubmission (dataArray) {

    console.log("formSubmission");
    jQuery.ajax( {
        type: "POST",
        url: "php/mail.php",
        data : dataArray
    }).done( function (result) {
            alert(result);
            jQuery("body").append(result);
        });

}*/


jQuery(document).ready(function(jQuery) {

    // Initialise Buggyfill for iOS messed up vh/vw behavior
    window.viewportUnitsBuggyfill.init();

    jQuery(".intro-right .face-wrapper").click( function (event) {
        event.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery(".intro-left").toggleClass("right-active");
    });

    jQuery(".overlay").click( function (event) {
        event.preventDefault();
        jQuery(this).parent().closest('div').toggleClass("active-ref col-sm-4 col-sm-8");
        jQuery(this).toggleClass("active-overlay");

    });

    jQuery("#contact").on("submit", function(event) {

        event.preventDefault();
        dataArray = jQuery(this).serializeArray();

        var proceed = false;

        jQuery.each(dataArray, function () {
            if (this != "") {
                proceed = true;
            }
            else {
                proceed = false;
            }
        });

        //everything looks good! proceed...
        if(proceed)
        {
            //Ajax post data to server

            jQuery.post('php/mail.php', dataArray, function(response){

                //load json data from server and output message
                if(response.type == 'error')
                {
                    output = '<div class="alert alert-danger">'+response.text+'</div>';
                }else{

                    output = '<div class="alert alert-success">'+response.text+'</div>';

                    //reset values in all input fields
                    jQuery("#contact").hide("slow");
                }

                jQuery("#result").html(output).slideDown();
            }, 'json');

        }
    });
    //reset previously set border colors and hide all message on .keyup()
    jQuery("#contact input, #contact textarea").keyup(function() {
        jQuery("#contact div").removeClass( "has-error");
        jQuery("#result").slideUp();
    });

    // Add Scroll Height indicator to fixed navigation
    jQuery(document).scroll( function () {

        var menu = jQuery(".floating-nav ul li a[href]");
        //console.log(jQuery(window).scrollTop());

        menu.each( function () {
            if (jQuery(this).data("targetHeight") <= jQuery(window).scrollTop()) {
                //console.log("matched" + jQuery(this).data("targetHeight"));
                jQuery(this).parent("li").siblings().removeClass("active");
                jQuery(this).parent("li").addClass("active");
            } else{
                //jQuery(this).parent("li").removeClass("active").siblings().removeClass("active");
            }

        })
    });

    jQuery(".floating-nav ul li a[href]").each( function () {

        var href = jQuery(this).attr('href');

        if (href.length > 1) {

            target = jQuery(jQuery(this).attr("href")).offset();
            jQuery(this).data("targetHeight", target.top);
        }
    });

    // scrolltop
    jQuery('a[href^=#]').on('click', function(e){

        var href = jQuery(this).attr('href');

        if (href.length > 1) {
            jQuery('html, body').animate({scrollTop:jQuery(href).offset().top
            },"slow");
            e.preventDefault();
        }


    });

});



