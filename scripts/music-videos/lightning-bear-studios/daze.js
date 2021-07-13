var daze; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    daze = new YT.Player('dazeVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'd79o4VcYUIA', 
               events: {  
                   'onReady': onPlayerReadyDaze
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyDaze(event) {  
    daze.setPlaybackQuality('hd720'); 
}