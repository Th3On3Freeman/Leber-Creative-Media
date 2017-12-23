// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var theHeart, theHeartKaraoke;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    theHeart = new YT.Player('theHeartVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'N6_U2znvrT8', 
               events: {  
                   'onReady': onPlayerReadyTH
               }  
    });     
    
    theHeartKaraoke = new YT.Player('theHeartKaraokeVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'T-M399pPm04', 
               events: {  
                   'onReady': onPlayerReadyTHK
               }  
    });   
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

//The Heart

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTH(event) {  
    theHeart.setPlaybackQuality('large'); 
}

//The Heart Karaoke

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyTHK(event) {  
    theHeartKaraoke.setPlaybackQuality('large'); 
}