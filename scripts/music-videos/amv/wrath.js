// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var wrath;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    wrath = new YT.Player('wrathVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'lNsvtgmkGQs', 
               events: {  
                   'onReady': onPlayerReadyW
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyW(event) {  
    wrath.setPlaybackQuality('large'); 
}