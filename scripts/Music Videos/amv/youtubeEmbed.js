
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var inbound, arsonistLullaby, genesisSkyfall, codeOfSwords, codeOfSwordsComparison;  
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
