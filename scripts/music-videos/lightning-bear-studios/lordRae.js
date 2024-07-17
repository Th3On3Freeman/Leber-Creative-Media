var lordRae; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    lordRae = new YT.Player('lordRaeVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '6sOqhgL2eF8', 
               events: {  
                   'onReady': onPlayerReadyLordRae
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyLordRae(event) {  
    lordRae.setPlaybackQuality('hd720'); 
}