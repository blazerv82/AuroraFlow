// Builds Documentation webpage via templates
const init = () => {

    $.ajaxSetup ({
        // Disable caching of AJAX responses
        cache: false
    });
    
    $("#changelog").load("changelog/affv5.html");

}


// Do things upon loading of webpage
window.addEventListener("load", init);