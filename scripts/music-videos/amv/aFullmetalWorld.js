// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var aFullmetalWorld;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    aFullmetalWorld = new YT.Player('aFullmetalWorldVideo', {  
               height: '848',  
               width: '480',  
               videoId: '7cLub-nNiWs', 
               events: {  
                   'onReady': onPlayerReadyAFW
               }  
    });    
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyAFW(event) {  
    aFullmetalWorld.setPlaybackQuality('large'); 
}