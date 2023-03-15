// Builds Documentation webpage via templates
const init = () => {

    $.ajaxSetup ({
        // Disable caching of AJAX responses
        cache: false
    });
    
    $("#changelogv6_1").load("changelog/affv6_1.html");
    $("#changelogv6_0").load("changelog/affv6_0.html");
    $("#changelogv5_1").load("changelog/affv5_1.html");
    $("#changelogv5").load("changelog/affv5.html");

}


// Do things upon loading of webpage
window.addEventListener("load", init);