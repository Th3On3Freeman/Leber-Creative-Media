// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var godOfANewWorld;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    godOfANewWorld = new YT.Player('godOfANewWorldVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'dFkLO1p-8bw', 
               events: {  
                   'onReady': onPlayerReadyGOANW
               }  
    });   
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyGOANW(event) {  
    godOfANewWorld.setPlaybackQuality('large'); 
}