var convergence; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    convergence = new YT.Player('convergenceVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '2bDG_4Y20IE', 
               events: {  
                   'onReady': onPlayerReadyConv
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyConv(event) {  
    convergence.setPlaybackQuality('hd720'); 
}