var genesisSkyfall; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    genesisSkyfall = new YT.Player('genesisSkyfallVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'vbYEhhlzYHw', 
               events: {  
                   'onReady': onPlayerReadyGS
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyGS(event) {  
    genesisSkyfall.setPlaybackQuality('hd720'); 
}