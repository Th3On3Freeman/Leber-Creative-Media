var marvelous; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    marvelous = new YT.Player('marvelousVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'sf-M99Isoxs', 
               events: {  
                   'onReady': onPlayerReadyMW
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyMW(event) {  
    marvelous.setPlaybackQuality('hd720'); 
}