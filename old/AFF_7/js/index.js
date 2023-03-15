$(document).ready(function(){

    $("#changelog_links").hide();
    $("#setup_links").hide();
    $("#doc_links").hide();
    $("#content_links").hide();

    // Hide/Show links
    $("#changelog_header").click(function(){
        $("#changelog_links").slideToggle("slow");
    });

});