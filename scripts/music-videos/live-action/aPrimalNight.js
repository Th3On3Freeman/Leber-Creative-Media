var aPrimalNight; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    aPrimalNight = new YT.Player('aPrimalNightVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'ULnXX54fvr8', 
               events: {  
                   'onReady': onPlayerReadyPN
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyPN(event) {  
    aPrimalNight.setPlaybackQuality('large'); 
}