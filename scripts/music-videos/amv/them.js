var them; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    them = new YT.Player('themVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'BE4R7-I3iHI', 
               events: {  
                   'onReady': onPlayerReadyThem
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyThem(event) {  
    them.setPlaybackQuality('hd720'); 
}