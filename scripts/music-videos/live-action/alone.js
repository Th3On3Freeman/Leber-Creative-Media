var alone; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    alone = new YT.Player('aloneVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '5p-ZHvSF0WE', 
               events: {  
                   'onReady': onPlayerReadyA
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyA(event) {  
    alone.setPlaybackQuality('hd720'); 
}