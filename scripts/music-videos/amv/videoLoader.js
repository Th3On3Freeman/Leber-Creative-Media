// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var convergenceCheck = 0;
var theHeartCheck = 0; 
var androgynyCheck = 0; 
var linkinParkDBZCheck = 0;
var inboundCheck = 0; 
var arsonistLullabyCheck = 0; 
var genesisSkyfallCheck = 0;
var codeOfSwordsCheck = 0; 
var revolutionCheck = 0; 
var onTheOtherSideCheck = 0; 
var godOfANewWorldCheck = 0; 
var XIIICheck = 0; 
var aFullmetalWorldCheck = 0;
var theCatAndTheDevilCheck = 0; 
var fightThePowerCheck = 0; 
var fullmetalAlchemistCheck = 0; 
var scarCheck = 0; 
var homunculiCheck = 0; 
var fifthLabCheck = 0; 
var brotherCheck = 0; 
var deathCheck = 0; 
var wrathCheck = 0; 
var deathToTheHomunculiCheck = 0; 
var fullmetalMemoriesCheck = 0; 
var royMustangCheck = 0; 
var theFacesOfEvilCheck = 0; 
var winryRizaIzumiCheck = 0; 
var summaryOfFMACheck = 0;
var accidentallyInLoveCheck = 0; 
var noGivingUpCheck = 0; 

//Convergence
$(document).on("click", ".convergence", function() {
    
   if(convergenceCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/convergence.js", function () {
            console.log("Convergence videos loaded");
            convergenceCheck = 1;
        });
   } //end if
});

//The Heart
$(document).on("click", ".theHeart", function() {
    
   if(theHeartCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/theHeart.js", function () {
            console.log("The Heart videos loaded");
            theHeartCheck = 1;
        });
   } //end if
});

//Androgyny
$(document).on("click", ".androgyny", function() {
    
   if(androgynyCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/androgyny.js", function () {
            console.log("Androgyny video loaded");
            androgynyCheck = 1;
        });
   } //end if
});

//Linkin Park DBZ
$(document).on("click", ".linkinParkDBZ", function() {
    
   if(linkinParkDBZCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/linkinParkDBZ.js", function () {
            console.log("Linkin Park DBZ video loaded");
            linkinParkDBZCheck = 1;
        });
   } //end if
});

//Inbound
$(document).on("click", ".inbound", function() {
    
    if(inboundCheck == 0)
    {
       $.getScript("/scripts/music-videos/amv/inbound.js", function () {
            console.log("Inbound video loaded");
            inboundCheck = 1;        
       });
    } //end if
   
});

//Arsonist's Lullabye
$(document).on("click", ".arsonistLullaby", function() {
    
   if(arsonistLullabyCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/arsonistLullaby.js", function () {
            console.log("Arsonist's Lullaby video loaded");
            arsonistLullabyCheck = 1;
        });
   } //end if
});

//Genesis Skyfall
$(document).on("click", ".genesisSkyfall", function() {
    
   if(genesisSkyfallCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/genesisSkyfall.js", function () {
            console.log("Genesis Skyfall video loaded");
            genesisSkyfallCheck = 1;
        });
   } //end if
});

//Code of Swords
$(document).on("click", ".codeOfSwords", function() {
    
   if(codeOfSwordsCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/codeOfSwords.js", function () {
            console.log("Code of Swords video loaded");
            codeOfSwordsCheck = 1;
        });
   } //end if
});

//Revolution
$(document).on("click", ".revolution", function() {
    
   if(revolutionCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/revolution.js", function () {
            console.log("Revolution video loaded");
            revolutionCheck = 1;
        });
   } //end if
});

//On the Other Side
$(document).on("click", ".onTheOtherSide", function() {
    
   if(onTheOtherSideCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/onTheOtherSide.js", function () {
            console.log("On the Other Side video loaded");
            onTheOtherSideCheck = 1;
        });
   } //end if
});

//God of a New World
$(document).on("click", ".godOfANewWorld", function() {
    
   if(godOfANewWorldCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/godOfANewWorld.js", function () {
            console.log("God of a New World video loaded");
            godOfANewWorldCheck = 1;
        });
   } //end if
});

//007: XIII
$(document).on("click", ".XIII", function() {
    
   if(XIIICheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/XIII.js", function () {
            console.log("007: XIII video loaded");
            XIIICheck = 1;
        });
   } //end if
});

//A Fullmetal World
$(document).on("click", ".aFullmetalWorld", function() {
    
   if(aFullmetalWorldCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/aFullmetalWorld.js", function () {
            console.log("A Fullmetal World video loaded");
            aFullmetalWorldCheck = 1;
        });
   } //end if
});

//The Cat & The Devil
$(document).on("click", ".theCatAndTheDevil", function() {
    
   if(theCatAndTheDevilCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/theCatAndTheDevil.js", function () {
            console.log("The Cat & The Devil video loaded");
            theCatAndTheDevilCheck = 1;
        });
   } //end if
});

//Fight the Power
$(document).on("click", ".fightThePower", function() {
    
   if(fightThePowerCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/fightThePower.js", function () {
            console.log("Fight the Power video loaded");
            fightThePowerCheck = 1;
        });
   } //end if
});

//Fullmetal Alchemist
$(document).on("click", ".fullmetalAlchemist", function() {
    
   if(fullmetalAlchemistCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/fullmetalAlchemist.js", function () {
            console.log("Fullmetal Alchemist video loaded");
            fullmetalAlchemistCheck = 1;
        });
   } //end if
});

//Scar
$(document).on("click", ".scar", function() {
    
   if(scarCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/scar.js", function () {
            console.log("Scar video loaded");
            scarCheck = 1;
        });
   } //end if
});

//Homunculi
$(document).on("click", ".homunculi", function() {
    
   if(homunculiCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/homunculi.js", function () {
            console.log("Homunculi video loaded");
            homunculiCheck = 1;
        });
   } //end if
});

//Fifth Lab
$(document).on("click", ".fifthLab", function() {
    
   if(fifthLabCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/fifthLab.js", function () {
            console.log("Fifth Lab video loaded");
            fifthLabCheck = 1;
        });
   } //end if
});

//Brother
$(document).on("click", ".brother", function() {
    
   if(brotherCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/brother.js", function () {
            console.log("Brother video loaded");
            brotherCheck = 1;
        });
   } //end if
});

//Death
$(document).on("click", ".death", function() {
    
   if(deathCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/death.js", function () {
            console.log("Death video loaded");
            deathCheck = 1;
        });
   } //end if
});

//Wrath
$(document).on("click", ".wrath", function() {
    
   if(wrathCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/wrath.js", function () {
            console.log("Wrath video loaded");
            wrathCheck = 1;
        });
   } //end if
});

//Death to the Homunculi
$(document).on("click", ".deathToTheHomunculi", function() {
    
   if(deathToTheHomunculiCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/deathToTheHomunculi.js", function () {
            console.log("Death to the Homunculi video loaded");
            deathToTheHomunculiCheck = 1;
        });
   } //end if
});

//Fullmetal Memories
$(document).on("click", ".fullmetalMemories", function() {
    
   if(fullmetalMemoriesCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/fullmetalMemories.js", function () {
            console.log("Fullmetal Memories video loaded");
            fullmetalMemoriesCheck = 1;
        });
   } //end if
});

//Roy Mustang
$(document).on("click", ".royMustang", function() {
    
   if(royMustangCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/royMustang.js", function () {
            console.log("Roy Mustang video loaded");
            royMustangCheck = 1;
        });
   } //end if
});

//The Faces of Evil
$(document).on("click", ".theFacesOfEvil", function() {
    
   if(theFacesOfEvilCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/theFacesOfEvil.js", function () {
            console.log("The Faces of Evil video loaded");
            theFacesOfEvilCheck = 1;
        });
   } //end if
});

//Winry Riza Izumi!
$(document).on("click", ".winryRizaIzumi", function() {
    
   if(winryRizaIzumiCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/winryRizaIzumi.js", function () {
            console.log("Winry Riza Izumi! video loaded");
            winryRizaIzumiCheck = 1;
        });
   } //end if
});

//Summary of FMA
$(document).on("click", ".summaryOfFMA", function() {
    
   if(summaryOfFMACheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/summaryOfFMA.js", function () {
            console.log("Summary of FMA video loaded");
            summaryOfFMACheck = 1;
        });
   } //end if
});

//Accidentally in Love
$(document).on("click", ".accidentallyInLove", function() {
    
    if(accidentallyInLoveCheck == 0)
    {
        $.getScript("/scripts/music-videos/amv/accidentallyInLove.js", function () {
            console.log("Accidentally in Love video loaded");
            accidentallyInLoveCheck = 1;
        });
    } //end if
});

//No Giving Up
$(document).on("click", ".noGivingUp", function() {
    
   if(noGivingUpCheck == 0)
   {
        $.getScript("/scripts/music-videos/amv/noGivingUp.js", function () {
            console.log("No Giving Up video loaded");
            noGivingUpCheck = 1;
        });
   } //end if
});