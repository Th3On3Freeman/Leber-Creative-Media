var honorAndVengeance; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    honorAndVengeance = new YT.Player('honorAndVengeanceVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'ZaoG-VuY5gA', 
               events: {  
                   'onReady': onPlayerReadyHV
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyHV(event) {  
    honorAndVengeance.setPlaybackQuality('hd720'); 
}