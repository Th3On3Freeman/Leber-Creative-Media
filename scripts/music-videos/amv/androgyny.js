// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var androgyny;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    arsonistLullaby = new YT.Player('androgynyVideo', {
            width: '1280',
            height: '720',   
            videoId: '_JtTImHEBdg',  
            events: {  
                'onReady': onPlayerReadyA  
            }
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyA(event) {  
    androgyny.setPlaybackQuality('hd720');
}