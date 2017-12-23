
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var inbound, arsonistLullaby, genesisSkyfall, codeOfSwords, codeOfSwordsComparison, revolution, onTheOtherSide, onTheOtherSideReaction, godOfANewWorld, XIII, XIIIComparison, aFullmetalWorld, theCatAndTheDevil, fightThePower, fightThePowerOG, fullmetalAlchemist, scar, homunculi, fifthLab, brother, death, wrath, deathToTheHomunculi, fullmetalMemories, royMustang, theFacesOfEvil, winryRizaIzumi, summaryOfFMA, accidentallyInLove, noGivingUp;  
function onYouTubeIframeAPIReady(id) {  

    inbound = new YT.Player('inboundVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'O8RFHPUOvJA',  
               events: {  
                   'onReady': onPlayerReadyI  
               }  
    });  
    
    arsonistLullaby = new YT.Player('arsonistLullabyVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'tB4sMWJwMoM',  
               events: {  
                   'onReady': onPlayerReadyAL  
               }  
    });  
    
    genesisSkyfall = new YT.Player('genesisSkyfallVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'vbYEhhlzYHw', 
               events: {  
                   'onReady': onPlayerReadyGS
               }  
    });  
    
    codeOfSwords = new YT.Player('codeOfSwordsVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'n9F_IKUDY8Q', 
               events: {  
                   'onReady': onPlayerReadyCOS
               }  
    });  
    
    codeOfSwordsComparison = new YT.Player('codeOfSwordsComparisonVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'RO67w17Dwe4', 
               events: {  
                   'onReady': onPlayerReadyCOSC
               }  
    });  
    
    revolution = new YT.Player('revolutionVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'yDI4vCm2DcE', 
               events: {  
                   'onReady': onPlayerReadyR
               }  
    });    
    
    onTheOtherSide = new YT.Player('onTheOtherSideVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'qzPjsh7ODRE', 
               events: {  
                   'onReady': onPlayerReadyOTOS
               }  
    });    
    
    onTheOtherSideReaction = new YT.Player('onTheOtherSideReactionVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'aJcAO2lfc9U', 
               events: {  
                   'onReady': onPlayerReadyOTOSR
               }  
    });    
    
    godOfANewWorld = new YT.Player('godOfANewWorldVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'dFkLO1p-8bw', 
               events: {  
                   'onReady': onPlayerReadyGOANW
               }  
    });  
    
    XIII = new YT.Player('XIIIVideo', {  
               height: '848',  
               width: '480',  
               videoId: '-lJDzznBMRM', 
               events: {  
                   'onReady': onPlayerReadyX
               }  
    });  
    
    XIIIComparison = new YT.Player('XIIIComparisonVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'NScSn0A04mI', 
               events: {  
                   'onReady': onPlayerReadyXC
               }  
    });  
    
    aFullmetalWorld = new YT.Player('aFullmetalWorldVideo', {  
               height: '848',  
               width: '480',  
               videoId: '7cLub-nNiWs', 
               events: {  
                   'onReady': onPlayerReadyAFW
               }  
    });  
    
    theCatAndTheDevil = new YT.Player('theCat&TheDevilVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'lQhq-aTm1yU', 
               events: {  
                   'onReady': onPlayerReadyTCATD
               }  
    });  
    
    fightThePower = new YT.Player('fightThePowerVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'au5R4sKopME', 
               events: {  
                   'onReady': onPlayerReadyFTP
               }  
    });  
    
    fightThePowerOG = new YT.Player('fightThePowerOGVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'Nv6-kAzraUg', 
               events: {  
                   'onReady': onPlayerReadyFTPOG
               }  
    });  
    
    fullmetalAlchemist = new YT.Player('fullmetalAlchemistVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'rcy2c5qtAMQ', 
               events: {  
                   'onReady': onPlayerReadyFA
               }  
    });  
    
    scar = new YT.Player('scarVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'rptA4iTRcBE', 
               events: {  
                   'onReady': onPlayerReadyS
               }  
    });  
    
    homunculi = new YT.Player('homunculiVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'AtoT5Q6Uq24', 
               events: {  
                   'onReady': onPlayerReadyH
               }  
    });  
    
    fifthLab = new YT.Player('fifthLabVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'bAVOJ6u4g_I', 
               events: {  
                   'onReady': onPlayerReadyFL
               }  
    });  
    
    brother = new YT.Player('brotherVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'xMhla_y1Aqk', 
               events: {  
                   'onReady': onPlayerReadyB
               }  
    });   
    
    death = new YT.Player('deathVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'qwDLNXCLe2o', 
               events: {  
                   'onReady': onPlayerReadyD
               }  
    });   
    
    wrath = new YT.Player('wrathVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'lNsvtgmkGQs', 
               events: {  
                   'onReady': onPlayerReadyW
               }  
    });   
    
    deathToTheHomunculi = new YT.Player('deathToTheHomunculiVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'ZXNOztw_e-M', 
               events: {  
                   'onReady': onPlayerReadyDTTH
               }  
    });   
    
    fullmetalMemories = new YT.Player('fullmetalMemoriesVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'UjNWLXkCCvw', 
               events: {  
                   'onReady': onPlayerReadyFM
               }  
    });   
    
    royMustang = new YT.Player('royMustangVideo', {  
               height: '720',  
               width: '480',  
               videoId: '9udXWPCYckI', 
               events: {  
                   'onReady': onPlayerReadyRM
               }  
    });   
    
    theFacesOfEvil = new YT.Player('theFacesOfEvilVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'YZjyP98Cgrs', 
               events: {  
                   'onReady': onPlayerReadyTFOE
               }  
    });   
    
    winryRizaIzumi = new YT.Player('winryRizaIzumiVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'D8W7MfF1sig', 
               events: {  
                   'onReady': onPlayerReadyWRI
               }  
    });   
    
    summaryOfFMA = new YT.Player('summaryOfFMAVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'NVXhbjFe9PI', 
               events: {  
                   'onReady': onPlayerReadySOF
               }  
    });   
    
    accidentallyInLove = new YT.Player('accidentallyInLoveVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'iTPXfnf_n54', 
               events: {  
                   'onReady': onPlayerReadyAIL
               }  
    });   
    
    noGivingUp = new YT.Player('noGivingUpVideo', {  
               height: '720',  
               width: '480',  
               videoId: '6N_yD4okWSk', 
               events: {  
                   'onReady': onPlayerReadyNGU
               }  
    });   
    
    
    
}  

//Inbound

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyI(event) {  
    inbound.setPlaybackQuality('hd720');
}  

//Arsonist's Lullabye

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyAL(event) {  
    arsonistLullaby.setPlaybackQuality('hd720'); 
}  

//Genesis Skyfall

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyGS(event) {  
    genesisSkyfall.setPlaybackQuality('hd720'); 
}  

//Code of Swords

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyCOS(event) {  
    codeOfSwords.setPlaybackQuality('large'); 
}      

//Code of Swords Comparison

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyCOSC(event) {  
    codeOfSwordsComparison.setPlaybackQuality('hd720'); 
}          

//Revolution

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyR(event) {  
    revolution.setPlaybackQuality('large'); 
}          

//On the Other Side

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyOTOS(event) {  
    onTheOtherSide.setPlaybackQuality('large'); 
}  

//On the Other Side Reaction

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyOTOSR(event) {  
    onTheOtherSideReaction.setPlaybackQuality('hd720'); 
}

//God of a New World

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyGOANW(event) {  
    godOfANewWorld.setPlaybackQuality('large'); 
}  

//007: XIII

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyX(event) {  
    XIII.setPlaybackQuality('large'); 
}      

//007: XIII Comparison

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyXC(event) {  
    XIIIComparison.setPlaybackQuality('hd720'); 
}  

//A Fullmetal World

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyAFW(event) {  
    aFullmetalWorld.setPlaybackQuality('large'); 
}  

//The Cat & The Devil

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTCATD(event) {  
    theCatAndTheDevil.setPlaybackQuality('large'); 
}  

//Fight the Power

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFTP(event) {  
    fightThePower.setPlaybackQuality('medium'); 
} 

//Fight the Power Original Version

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFTPOG(event) {  
    fightThePowerOG.setPlaybackQuality('medium'); 
}  

//Fullmetal Alchemist

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFA(event) {  
    fullmetalAlchemist.setPlaybackQuality('large'); 
}  

//Scar

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyS(event) {  
    scar.setPlaybackQuality('large'); 
}  

//Homunculi

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyH(event) {  
    homunculi.setPlaybackQuality('large'); 
}  

//Fifth Lab

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFL(event) {  
    fifthLab.setPlaybackQuality('large'); 
}  

//Brother

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyB(event) {  
    brother.setPlaybackQuality('large'); 
}  

//Death

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyD(event) {  
    death.setPlaybackQuality('large'); 
}  

//Wrath

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyW(event) {  
    wrath.setPlaybackQuality('large'); 
}  

//Death to the Homunculi

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyDTTH(event) {  
    deathToTheHomunculi.setPlaybackQuality('large'); 
}  

//Fullmetal Memories

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFM(event) {  
    fullmetalMemories.setPlaybackQuality('large'); 
}  

//Roy Mustang

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyRM(event) {  
    royMustang.setPlaybackQuality('large'); 
}   

//The Faces of Evil

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTFOE(event) {  
    theFacesOfEvil.setPlaybackQuality('medium'); 
}   

//Winry Riza Izumi!

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyWRI(event) {  
    winryRizaIzumi.setPlaybackQuality('large'); 
}   

//Summary of FMA

// 3. The API will call this function when the video player is ready. 
function onPlayerReadySOF(event) {  
    summaryOfFMA.setPlaybackQuality('large'); 
}   

//Accidentally in Love

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyAIL(event) {  
    accidentallyInLove.setPlaybackQuality('large'); 
}   

//No Giving Up

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyNGU(event) {  
    noGivingUp.setPlaybackQuality('large'); 
}   
