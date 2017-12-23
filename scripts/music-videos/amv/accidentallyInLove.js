// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var accidentallyInLove;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    accidentallyInLove = new YT.Player('accidentallyInLoveVideo', {
               width: '720',
               height: '480',    
               videoId: 'iTPXfnf_n54', 
               events: {  
                   'onReady': onPlayerReadyAIL
               }
        });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyAIL(event) {  
    accidentallyInLove.setPlaybackQuality('large');
}