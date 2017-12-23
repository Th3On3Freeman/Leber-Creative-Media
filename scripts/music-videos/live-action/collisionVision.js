var collisionVision; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    collisionVision = new YT.Player('collisionVisionVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '_0YYYJ8kpK0', 
               events: {  
                   'onReady': onPlayerReadyCV
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyCV(event) {  
    collisionVision.setPlaybackQuality('hd720'); 
}