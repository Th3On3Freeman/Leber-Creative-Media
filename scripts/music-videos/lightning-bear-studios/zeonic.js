var zeonic; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    zeonic = new YT.Player('zeonicVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'ZVvc1BQ7HQU', 
               events: {  
                   'onReady': onPlayerReadyZeonic
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyZeonic(event) {  
    zeonic.setPlaybackQuality('hd720'); 
}