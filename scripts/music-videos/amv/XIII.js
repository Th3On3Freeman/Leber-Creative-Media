// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var XIII, XIIIComparison;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    XIII = new YT.Player('XIIIVideo', {  
               height: '848',  
               width: '480',  
               videoId: '-lJDzznBMRM', 
               events: {  
                   'onReady': onPlayerReadyX
               }  
    });  
    
    XIIIComparison = new YT.Player('XIIIComparisonVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'NScSn0A04mI', 
               events: {  
                   'onReady': onPlayerReadyXC
               }  
    });  
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

//007: XIII

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyX(event) {  
    XIII.setPlaybackQuality('large'); 
}      

//007: XIII Comparison

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyXC(event) {  
    XIIIComparison.setPlaybackQuality('hd720'); 
}