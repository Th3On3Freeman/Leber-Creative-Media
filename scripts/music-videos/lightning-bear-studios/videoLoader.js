// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var aichiCheck = 0; 
var bleachCheck = 0;
var dexCheck = 0;
var hwfCheck = 0;
var hvCheck = 0;
var kkCheck = 0;
var legCheck = 0;
var lordRaeCheck = 0;
var pkCheck = 0;
var raikshaCheck = 0;
var resyCheck = 0;
var rivkahCheck = 0;
var sarahCheck = 0;
var speedyCheck = 0;
var desCheck = 0;
var twigCheck = 0;
var zeonicCheck = 0;

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

//BleachShippu5678 - Pieces
$(document).on("click", ".bleach", function() {
    
    if(bleachCheck == 0)
    {
         $.getScript("/scripts/music-videos/lightning-bear-studios/bleach.js", function () {
             console.log("Bleach video loaded");
             bleachCheck = 1;
         });
    } //end if
 });


//Dexter - Don't Worry
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

//hilovids - sunshine
$(document).on("click", ".hv", function() {
    
   if(hvCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/hv.js", function () {
            console.log("HV video loaded");
            hvCheck = 1;
        });
   } //end if
});

//Krispy Korean - Blonde Fragility
$(document).on("click", ".kk", function() {
    
   if(kkCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/kk.js", function () {
            console.log("KK video loaded");
            kkCheck = 1;
        });
   } //end if
});

//Legato2400 - Deep Freeze
$(document).on("click", ".leg", function() {
    
   if(legCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/leg.js", function () {
            console.log("Leg video loaded");
            legCheck = 1;
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

//RaikiriShadow - Bocchi The Rock
$(document).on("click", ".raiksha", function() {
    
   if(raikshaCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/raiksha.js", function () {
            console.log("RaikiriShadow video loaded");
            raikshaCheck = 1;
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

//TheDestineeAMV - Thru Our Fire
$(document).on("click", ".des", function() {
    
   if(desCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/des.js", function () {
            console.log("TheDestineeAMV video loaded");
            desCheck = 1;
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

//ZeonicFreak - A Thousand Bops
$(document).on("click", ".zeonic", function() {
    
   if(zeonicCheck == 0)
   {
        $.getScript("/scripts/music-videos/lightning-bear-studios/zeonic.js", function () {
            console.log("Zeonic video loaded");
            zeonicCheck = 1;
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
