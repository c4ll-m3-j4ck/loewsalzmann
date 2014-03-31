jQuery(document).ready(function($) {

    jQuery(".intro-right .face-wrapper").click( function (event) {
        event.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery(".intro-left").toggleClass("right-active");
    })

});


