// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var fullmetalMemories; 

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    fullmetalMemories = new YT.Player('fullmetalMemoriesVideo', {  
               height: '720',  
               width: '480',  
               videoId: 'UjNWLXkCCvw', 
               events: {  
                   'onReady': onPlayerReadyFM
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFM(event) {  
    fullmetalMemories.setPlaybackQuality('large'); 
}