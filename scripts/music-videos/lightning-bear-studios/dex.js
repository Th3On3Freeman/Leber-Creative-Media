var dex; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    dex = new YT.Player('dexVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'oFcMN6F1ZiU', 
               events: {  
                   'onReady': onPlayerReadyDex
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyDex(event) {  
    dex.setPlaybackQuality('hd720'); 
}