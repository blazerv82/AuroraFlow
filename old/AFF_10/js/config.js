$(document).ready(function(){

    // Remove caching, auto reload
    disableCache();

    // Replaces what was found
    $.get("tiles/footer.html #footer", function(data) {
        $("#footer").replaceWith(data);
    });

    // Overview
    $("#rbo").load("tiles/config/rbo.html");

    // Disclaimer
    $("#disclaimer").load("tiles/config/disclaimer.html");
    
    // Version Info
    $("#version").load("tiles/config/version.html");

    $.getJSON("js/aff_info.json", function(data) {
        var items = [];
        $.each(data, function(key, val) {
          items.push(val);
        });
       
        $("#aff_info").append(items[0] + ' ' + items[1]);
    });
    
    // Download and Use
    $("#dau").load("tiles/config/dau.html");

    
});