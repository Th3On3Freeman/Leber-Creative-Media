var itAintLikeItWasBefore; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    itAintLikeItWasBefore = new YT.Player('itAintLikeItWasBeforeVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'vQKuvl7343M', 
               events: {  
                   'onReady': onPlayerReadyIALIWB
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyIALIWB(event) {  
    itAintLikeItWasBefore.setPlaybackQuality('hd720'); 
}