// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var inbound;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    inbound = new YT.Player('inboundVideo', {
            width: '1280',  
            height: '720',
            videoId: 'VKhhCFGkQrQ',  
            events: {  
                'onReady': onPlayerReadyI  
            }
        });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyI(event) {  
    inbound.setPlaybackQuality('hd720');
}