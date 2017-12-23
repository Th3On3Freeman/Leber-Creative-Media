// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var theFacesOfEvil;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    theFacesOfEvil = new YT.Player('theFacesOfEvilVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'YZjyP98Cgrs', 
               events: {  
                   'onReady': onPlayerReadyTFOE
               }  
    });
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTFOE(event) {  
    theFacesOfEvil.setPlaybackQuality('medium'); 
}