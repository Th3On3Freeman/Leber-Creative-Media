var des; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    des = new YT.Player('desVideo', {  
               height: '1920',  
               width: '1080',  
               videoId: '_XTdohnsvM4', 
               events: {  
                   'onReady': onPlayerReadyDes
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyDes(event) {  
    des.setPlaybackQuality('hd1080'); 
}