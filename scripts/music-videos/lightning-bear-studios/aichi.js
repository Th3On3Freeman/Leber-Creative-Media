var aichi; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    aichi = new YT.Player('aichiVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '4pJuOmKhI8g', 
               events: {  
                   'onReady': onPlayerReadyAichi
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyAichi(event) {  
    aichi.setPlaybackQuality('hd720'); 
}