// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var inboundCheck = 0; 
var arsonistLullabyCheck = 0; 
var accidentallyInLoveCheck = 0; 
/*
$(document).on("click", ".fullWidthDropdown", function() {
   
    if(!$("#intro").hasClass("deactiveSect"))
    {
        $("#intro").addClass("deactiveSect");
    } //end if
    
    if($(".tab-pane").hasClass("activeSect"))
    {
        $(".tab-pane").removeClass("activeSect");
        $(".tab-pane").addClass("deactiveSect");
    } //end if
    
});
*/

$(document).on("click", ".fullWidthDropdown, #introBtn", function() {
   
    $(".tab-pane").empty();
    
});

//Intro
$(document).on("click", "#introBtn", function() {
    
    $.ajax({
       url: '/music-videos/amv-content/intro.php', 
       method: 'GET'    
    }).done(function(html){
        
        $('#intro').html(html);       
    });
});

//Inbound
$(document).on("click", ".inbound", function() {
    /*
    $("#i").removeClass("deactiveSect");
    $("#i").addClass("activeSect");
    */
    
    $.ajax({
       url: '/music-videos/amv-content/inbound.php', 
       method: 'GET'    
    }).done(function(html){
        
        $('#i').html(html);
        
        if(inboundCheck == 0)
        {
           $.getScript("/scripts/music-videos/amv/inbound.js", function () {
                console.log("Inbound video loaded");
                inboundCheck = 1;        
           });
        } //end if        
    });
});

//Arsonist's Lullabye
$(document).on("click", ".arsonistLullaby", function() {
   /*
    $("#al").removeClass("deactiveSect");
    $("#al").addClass("activeSect");
    */
    
    $.ajax({
       url: '/music-videos/amv-content/arsonistLullaby.php', 
       method: 'GET'    
    }).done(function(html){
        
        $('#al').html(html);
        
        if(arsonistLullabyCheck == 0)
        {
             $.getScript("/scripts/music-videos/amv/arsonistLullaby.js", function () {
                 console.log("Arsonist's Lullaby video loaded");
                 arsonistLullabyCheck = 1;
             });
        } //end if       
    });
});

//Accidentally in Love
$(document).on("click", ".accidentallyInLove", function() {
    /*
    $("#ail").removeClass("deactiveSect");
    $("#ail").addClass("activeSect");
    */
    
    $.ajax({
       url: '/music-videos/amv-content/accidentallyInLove.php', 
       method: 'GET'    
    }).done(function(html){
        
        $('#ail').html(html);
        
        if(accidentallyInLoveCheck == 0)
        {
            $.getScript("/scripts/music-videos/amv/accidentallyInLove.js", function () {
                console.log("Accidentally in Love video loaded");
                accidentallyInLoveCheck = 1;
            });
        } //end if     
    });
        
    
});