// Builds Documentation webpage via templates
$(document).ready(function(){

    $.ajaxSetup ({
        // Disable caching of AJAX responses
        cache: false
    });
    
    $("#first_steps").load("configuration/first_steps.html");

});