// Builds Documentation webpage via templates
$(document).ready(function(){

    disableCache();
    
    $("#viewport").load("documentation/viewport.html");
    $("#viewport_sizing").load("documentation/viewport_sizing.html");
    $("#offset").load("documentation/offset.html");
    $("#padding").load("documentation/padding.html");
    $("#margin").load("documentation/margin.html");
    $("#display").load("documentation/display.html");
    $("#containers").load("documentation/containers.html");
    $("#themes").load("documentation/themes.html");
    $("#colors").load("documentation/colors.html");
    $("#font_sizing").load("documentation/font_sizing.html");
    $("#other").load("documentation/other.html");

});