var leg; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    leg = new YT.Player('legVideo', {  
               height: '3840',  
               width: '2160',  
               videoId: 'uBqtS5ds4eY', 
               events: {  
                   'onReady': onPlayerReadyLeg
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyLeg(event) {  
    leg.setPlaybackQuality('hd2160'); 
}