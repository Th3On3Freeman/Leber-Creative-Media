var society; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    society = new YT.Player('societyVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'YCwrURHW2C0', 
               events: {  
                   'onReady': onPlayerReadyFSOC
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFSOC(event) {  
    society.setPlaybackQuality('hd720'); 
}