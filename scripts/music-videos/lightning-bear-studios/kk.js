var kk; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    kk = new YT.Player('kkVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'RxAcnNC3qHQ', 
               events: {  
                   'onReady': onPlayerReadyKK
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyKK(event) {  
    kk.setPlaybackQuality('hd720'); 
}