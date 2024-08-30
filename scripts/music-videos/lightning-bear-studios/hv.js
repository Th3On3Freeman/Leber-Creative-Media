var hv; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    hv = new YT.Player('hvVideo', {  
               height: '1920',  
               width: '1080',  
               videoId: 'geTWcOb5ITA', 
               events: {  
                   'onReady': onPlayerReadyHV
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyHV(event) {  
    hv.setPlaybackQuality('hd1080'); 
}