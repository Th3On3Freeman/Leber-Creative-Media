var hwf; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    hwf = new YT.Player('hwfVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '0pVfFL3U-f4', 
               events: {  
                   'onReady': onPlayerReadyHWF
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyHWF(event) {  
    hwf.setPlaybackQuality('hd720'); 
}