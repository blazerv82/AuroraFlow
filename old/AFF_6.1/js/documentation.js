// Builds Documentation webpage via templates
const init = () => {

    $.ajaxSetup ({
        // Disable caching of AJAX responses
        cache: false
    });
    
    $("#viewport").load("documentation/viewport.html");
    $("#viewport_sizing").load("documentation/viewport_sizing.html");
    $("#offset").load("documentation/offset.html");
    $("#padding").load("documentation/padding.html");
    $("#margin").load("documentation/margin.html");
    $("#display").load("documentation/display.html");
    $("#containers").load("documentation/containers.html");
    $("#themes").load("documentation/themes.html");
    $("#colors").load("documentation/colors.html");
    $("#other").load("documentation/other.html");

}


// Do things upon loading of webpage
window.addEventListener("load", init);