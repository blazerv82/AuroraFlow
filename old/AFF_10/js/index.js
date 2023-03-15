$(document).ready(function(){

    disableCache();
    
    // Replaces what was found
    $.get("tiles/footer.html #footer", function(data) {
        $("#footer").replaceWith(data);
    });

});