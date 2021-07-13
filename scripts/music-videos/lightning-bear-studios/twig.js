var twig; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    twig = new YT.Player('twigVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'FrJjkpIPnK4', 
               events: {  
                   'onReady': onPlayerReadyTwig
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTwig(event) {  
    twig.setPlaybackQuality('hd720'); 
}