// Builds Documentation webpage via templates
$(document).ready(function(){

    disableCache();

    // Replaces what was found
    $.get("tiles/footer.html #footer", function(data) {
        $("#footer").replaceWith(data);
    });
    
    $("#viewport").load("tiles/documentation/viewport.html");
    $("#containers").load("tiles/documentation/containers.html");
    $("#offset").load("tiles/documentation/offset.html");
    $("#padding").load("tiles/documentation/padding.html");
    $("#margin").load("tiles/documentation/margin.html");
    $("#display").load("tiles/documentation/display.html");
    $("#themes").load("tiles/documentation/themes.html");
    $("#colors").load("tiles/documentation/colors.html");
    $("#text").load("tiles/documentation/text.html");
    $("#border").load("tiles/documentation/border.html");
    $("#round").load("tiles/documentation/round.html");
    $("#other").load("tiles/documentation/other.html");

});