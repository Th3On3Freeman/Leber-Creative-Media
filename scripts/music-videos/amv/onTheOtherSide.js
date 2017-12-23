// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var onTheOtherSide, onTheOtherSideReaction;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    onTheOtherSide = new YT.Player('onTheOtherSideVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'qzPjsh7ODRE', 
               events: {  
                   'onReady': onPlayerReadyOTOS
               }  
    });    
    
    onTheOtherSideReaction = new YT.Player('onTheOtherSideReactionVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'aJcAO2lfc9U', 
               events: {  
                   'onReady': onPlayerReadyOTOSR
               }  
    });   
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

//On the Other Side

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyOTOS(event) {  
    onTheOtherSide.setPlaybackQuality('large'); 
}  

//On the Other Side Reaction

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyOTOSR(event) {  
    onTheOtherSideReaction.setPlaybackQuality('hd720'); 
}