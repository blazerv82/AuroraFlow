$(document).ready(function(){

    // Remove caching, auto reload
    disableCache();

    // Replaces what was found
    $.get("tiles/footer.html #footer", function(data) {
        $("#footer").replaceWith(data);
    });

});