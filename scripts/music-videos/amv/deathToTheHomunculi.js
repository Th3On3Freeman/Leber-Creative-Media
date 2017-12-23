// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var deathToTheHomunculi;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    deathToTheHomunculi = new YT.Player('deathToTheHomunculiVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'ZXNOztw_e-M', 
               events: {  
                   'onReady': onPlayerReadyDTTH
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyDTTH(event) {  
    deathToTheHomunculi.setPlaybackQuality('large'); 
}