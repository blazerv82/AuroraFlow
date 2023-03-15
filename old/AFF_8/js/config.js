$(document).ready(function(){

    // Remove caching, auto reload
    disableCache();

    // Overview
    $("#rbo").load("config/rbo.html");

    // Disclaimer
    $("#disclaimer").load("config/disclaimer.html");
    
    // Version Info
    $("#version").load("config/version.html");
    
    // Download and Use
    $("#dau").load("config/dau.html");

});