var resy; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    resy = new YT.Player('resyVideo', {  
               height: '1920',  
               width: '1080',  
               videoId: 'pyw9YjH-puw', 
               events: {  
                   'onReady': onPlayerReadyResy
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyResy(event) {  
    resy.setPlaybackQuality('hd1080'); 
}