var speedy; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    speedy = new YT.Player('speedyVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'ljJItEDr79s', 
               events: {  
                   'onReady': onPlayerReadySpeedy
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadySpeedy(event) {  
    speedy.setPlaybackQuality('hd720'); 
}