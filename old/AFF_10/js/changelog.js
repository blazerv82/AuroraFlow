// Builds Documentation webpage via templates
$(document).ready(function(){

    disableCache();

    // Replaces what was found
    $.get("tiles/footer.html #footer", function(data) {
        $("#footer").replaceWith(data);
    });

    
    
    $("#changelog10").load("tiles/changelog/aff_10.html");
    $("#changelog9").load("tiles/changelog/aff9.html");
    $("#changelog8").load("tiles/changelog/aff8.html");
    $("#changelogv7").load("tiles/changelog/affv7.html");
    $("#changelogv6_1").load("tiles/changelog/affv6_1.html");
    $("#changelogv6_0").load("tiles/changelog/affv6_0.html");
    $("#changelogv5_1").load("tiles/changelog/affv5_1.html");
    $("#changelogv5").load("tiles/changelog/affv5.html");

});