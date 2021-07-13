var rivkah; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    rivkah = new YT.Player('rivkahVideo', {  
               height: '2560',  
               width: '1440',  
               videoId: 'Gv-MA3iR21w', 
               events: {  
                   'onReady': onPlayerReadyRivkah
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyRivkah(event) {  
    rivkah.setPlaybackQuality('hd1440'); 
}