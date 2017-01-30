
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var inbound, arsonistLullaby, genesisSkyfall, codeOfSwords, codeOfSwordsComparison, revolution, onTheOtherSide, godOfANewWorld, XIII, XIIIComparison, aFullmetalWorld, theCatAndTheDevil, fightThePower, fightThePowerOG;  
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
