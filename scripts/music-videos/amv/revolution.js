// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var revolution; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    revolution = new YT.Player('revolutionVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'yDI4vCm2DcE', 
               events: {  
                   'onReady': onPlayerReadyR
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyR(event) {  
    revolution.setPlaybackQuality('large'); 
}