// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var zword;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    zword = new YT.Player('zWordVideo', {
            width: '1280',
            height: '720',   
            videoId: 'ex0n9tNbPKs',  
            events: {  
                'onReady': onPlayerReadyZ  
            }
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyZ(event) {  
    zword.setPlaybackQuality('hd720');
}