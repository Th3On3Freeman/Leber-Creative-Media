// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var aichiCheck = 0; 
var dexCheck = 0;
var hwfCheck = 0;
var lordRaeCheck = 0;
var pkCheck = 0;
var resyCheck = 0;
var rivkahCheck = 0;
var sarahCheck = 0;
var speedyCheck = 0;
var dazeCheck = 0;
var twigCheck = 0;

var zwordCheck = 0; 
var androgynyCheck = 0; 
var inboundCheck = 0; 


//Aichi - Eminence in Shadow
$(document).on("click", ".aichi", function() {
    
   if(aichiCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/aichi.js", function () {
            console.log("Aichi video loaded");
            aichiCheck = 1;
        });
   } //end if
});

//Dexter - Do you know what's going on?
$(document).on("click", ".dex", function() {
    
   if(dexCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/dex.js", function () {
            console.log("Dex video loaded");
            dexCheck = 1;
        });
   } //end if
});

//Hidden White Fang - Once I was 7 Years Old
$(document).on("click", ".hwf", function() {
    
   if(hwfCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/hwf.js", function () {
            console.log("HWF video loaded");
            hwfCheck = 1;
        });
   } //end if
});

//Lord Rae - Fatalism vs Determinism
$(document).on("click", ".lordRae", function() {
    
   if(lordRaeCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/lordRae.js", function () {
            console.log("Lord Rae video loaded");
            lordRaeCheck = 1;
        });
   } //end if
});

//Piyush K - Fairy Tale Opening ft. Game of Thrones
$(document).on("click", ".pk", function() {
    
   if(pkCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/pk.js", function () {
            console.log("pk video loaded");
            pkCheck = 1;
        });
   } //end if
});

//Resy - Rising Waves Drown
$(document).on("click", ".resy", function() {
    
   if(resyCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/resy.js", function () {
            console.log("Resy video loaded");
            resyCheck = 1;
        });
   } //end if
});

//Rivkah - Bang Bang Bang
$(document).on("click", ".rivkah", function() {
    
   if(rivkahCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/rivkah.js", function () {
            console.log("Rivkah video loaded");
            rivkahCheck = 1;
        });
   } //end if
});

//SasukeChanX - I'm (Not) Myself
$(document).on("click", ".sarah", function() {
    
   if(sarahCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/sarah.js", function () {
            console.log("Sarah video loaded");
            sarahCheck = 1;
        });
   } //end if
});

//Speedy180 - The Tin Man's Journey
$(document).on("click", ".speedy", function() {
    
   if(speedyCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/speedy.js", function () {
            console.log("Speedy video loaded");
            speedyCheck = 1;
        });
   } //end if
});

//TheLazyDaze - Truck-Kun x Train-Chan: Get Wrecked
$(document).on("click", ".daze", function() {
    
   if(dazeCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/daze.js", function () {
            console.log("Daze video loaded");
            dazeCheck = 1;
        });
   } //end if
});

//TwigglyFiggly - Breakdown
$(document).on("click", ".twig", function() {
    
   if(twigCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/twig.js", function () {
            console.log("Twig video loaded");
            twigCheck = 1;
        });
   } //end if
});

//AWA THUNDERDOME

//2019 - We're not using the Z-Word!
$(document).on("click", ".zword", function() {
    
   if(zwordCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/zword.js", function () {
            console.log("Zword video loaded");
            zwordCheck = 1;
        });
   } //end if
});

//2017 - Androgyny
$(document).on("click", ".androgyny", function() {
    
   if(androgynyCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/androgyny.js", function () {
            console.log("Androgyny video loaded");
            androgynyCheck = 1;
        });
   } //end if
});

//2016 - Inbound
$(document).on("click", ".inbound", function() {
    
    if(inboundCheck == 0)
    {
       $.getScript("/scripts/music-videos/lightning-bear-studios/inbound.js", function () {
            console.log("Inbound video loaded");
            inboundCheck = 1;        
       });
    } //end if
   
});
