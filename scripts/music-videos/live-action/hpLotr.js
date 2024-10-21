var hpLotr; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    hpLotr = new YT.Player('hpLotrVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'wgYmz1MdXuI', 
               events: {  
                   'onReady': onPlayerReadyHpLotr
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyHpLotr(event) {  
    hpLotr.setPlaybackQuality('hd720'); 
}