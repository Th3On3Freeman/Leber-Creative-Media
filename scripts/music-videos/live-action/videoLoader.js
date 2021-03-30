// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var toxicOrphansCheck = 0; 
var madnessCheck = 0; 
var oneThatIWantCheck = 0; 
var theButterflyCheck = 0; 
var aloneCheck = 0; 
var collisionVisionCheck = 0; 
var shadesOfRealityCheck = 0; 
var aBrokenHomeCheck = 0; 
var aPrimalNightCheck = 0; 
var honorAndVengeanceCheck = 0; 
var itAintLikeItWasBeforeCheck = 0; 
var aTaleOfTwoMenCheck = 0; 

//Madness
$(document).on("click", ".toxicOrphans", function() {
    
   if(toxicOrphansCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/toxicOrphans.js", function () {
            console.log("Toxic video loaded");
            toxicOrphansCheck = 1;
        });
   } //end if
});

//Madness
$(document).on("click", ".madness", function() {
    
   if(madnessCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/madness.js", function () {
            console.log("Madness video loaded");
            madnessCheck = 1;
        });
   } //end if
});

//One that I want
$(document).on("click", ".oneThatIWant", function() {
    
   if(oneThatIWantCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/oneThatIWant.js", function () {
            console.log("One that I want video loaded");
            oneThatIWantCheck = 1;
        });
   } //end if
});

//The Butterfly
$(document).on("click", ".theButterfly", function() {
    
   if(theButterflyCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/theButterfly.js", function () {
            console.log("The Butterfly video loaded");
            theButterflyCheck = 1;
        });
   } //end if
});

//Alone - A Short Story
$(document).on("click", ".alone", function() {
    
   if(aloneCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/alone.js", function () {
            console.log("Alone video loaded");
            aloneCheck = 1;
        });
   } //end if
});

//Collision Vision
$(document).on("click", ".collisionVision", function() {
    
   if(collisionVisionCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/collisionVision.js", function () {
            console.log("Collision Vision video loaded");
            collisionVisionCheck = 1;
        });
   } //end if
});

//Shades of Reality
$(document).on("click", ".shadesOfReality", function() {
    
    if(shadesOfRealityCheck == 0)
    {
       $.getScript("/scripts/music-videos/live-action/shadesOfReality.js", function () {
            console.log("Shades Of Reality video loaded");
            shadesOfRealityCheck = 1;        
       });
    } //end if
});

//A Broken Home
$(document).on("click", ".aBrokenHome", function() {
    
   if(aBrokenHomeCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/aBrokenHome.js", function () {
            console.log("A Broken Home video loaded");
            aBrokenHomeCheck = 1;
        });
   } //end if
});

//A Primal Night
$(document).on("click", ".aPrimalNight", function() {
    
   if(aPrimalNightCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/aPrimalNight.js", function () {
            console.log("A Primal Night video loaded");
            aPrimalNightCheck = 1;
        });
   } //end if
});

//Honor and Vengeance
$(document).on("click", ".honorAndVengeance", function() {
    
   if(honorAndVengeanceCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/honorAndVengeance.js", function () {
            console.log("Honor and Vengeance video loaded");
            honorAndVengeanceCheck = 1;
        });
   } //end if
});

//It Ain't Like It Was Before
$(document).on("click", ".itAintLikeItWasBefore", function() {
    
   if(itAintLikeItWasBeforeCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/itAintLikeItWasBefore.js", function () {
            console.log("It Ain't Like It Was Before video loaded");
            itAintLikeItWasBeforeCheck = 1;
        });
   } //end if
});

//A Tale of Two Men
$(document).on("click", ".aTaleOfTwoMen", function() {
    
   if(aTaleOfTwoMenCheck == 0)
   {
        $.getScript("/scripts/music-videos/live-action/aTaleOfTwoMen.js", function () {
            console.log("A Tale of Two Men video loaded");
            aTaleOfTwoMenCheck = 1;
        });
   } //end if
});