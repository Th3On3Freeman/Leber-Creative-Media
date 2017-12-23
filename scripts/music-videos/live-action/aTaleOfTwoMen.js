var aTaleOfTwoMen; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    aTaleOfTwoMen = new YT.Player('aTaleOfTwoMenVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '_r2AbN0AoRo', 
               events: {  
                   'onReady': onPlayerReadyATOTM
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyATOTM(event) {  
    aTaleOfTwoMen.setPlaybackQuality('hd720'); 
}