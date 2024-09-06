var theBloodYouOwe; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    theBloodYouOwe = new YT.Player('theBloodYouOweVideo', {  
               height: '1920',  
               width: '1080',  
               videoId: 'CWKH3O7qgGI', 
               events: {  
                   'onReady': onPlayerReadyTBYO
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTBYO(event) {  
    theBloodYouOwe.setPlaybackQuality('hd1080'); 
}