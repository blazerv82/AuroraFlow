// Builds Documentation webpage via templates
$(document).ready(function(){

    disableCache();
    
    $("#changelog9").load("changelog/aff9.html");
    $("#changelog8").load("changelog/aff8.html");
    $("#changelogv7").load("changelog/affv7.html");
    $("#changelogv6_1").load("changelog/affv6_1.html");
    $("#changelogv6_0").load("changelog/affv6_0.html");
    $("#changelogv5_1").load("changelog/affv5_1.html");
    $("#changelogv5").load("changelog/affv5.html");

});