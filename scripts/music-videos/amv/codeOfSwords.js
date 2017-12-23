// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var codeOfSwords, codeOfSwordsComparison;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    codeOfSwords = new YT.Player('codeOfSwordsVideo', {  
               height: '848',  
               width: '480',  
               videoId: 'n9F_IKUDY8Q', 
               events: {  
                   'onReady': onPlayerReadyCOS
               }  
    });  
    
    codeOfSwordsComparison = new YT.Player('codeOfSwordsComparisonVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'RO67w17Dwe4', 
               events: {  
                   'onReady': onPlayerReadyCOSC
               }  
    });     
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

//Code of Swords

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyCOS(event) {  
    codeOfSwords.setPlaybackQuality('large'); 
}      

//Code of Swords Comparison

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyCOSC(event) {  
    codeOfSwordsComparison.setPlaybackQuality('hd720'); 
}