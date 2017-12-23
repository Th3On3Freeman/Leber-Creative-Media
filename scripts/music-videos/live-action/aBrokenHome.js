var aBrokenHome; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    aBrokenHome = new YT.Player('aBrokenHomeVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'I_qZNU-K1eE', 
               events: {  
                   'onReady': onPlayerReadyBH
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyBH(event) {  
    aBrokenHome.setPlaybackQuality('large'); 
}