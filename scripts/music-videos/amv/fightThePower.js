// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.

var fightThePower, fightThePowerOG;

// create youtube player if API is loaded
try {
    create_ytplayer();
} catch (e) {
    console.log('API not loaded, will create player using onYouTubeIframeAPIReady');
}

// create player
function create_ytplayer() {
    fightThePower = new YT.Player('fightThePowerVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'au5R4sKopME', 
               events: {  
                   'onReady': onPlayerReadyFTP
               }  
    });  
    
    fightThePowerOG = new YT.Player('fightThePowerOGVideo', {  
               height: '640',  
               width: '360',  
               videoId: 'Nv6-kAzraUg', 
               events: {  
                   'onReady': onPlayerReadyFTPOG
               }  
    });    
}

// create youtube player if API was not loaded previously
function onYouTubeIframeAPIReady() {
    create_ytplayer();
}

//Fight the Power

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFTP(event) {  
    fightThePower.setPlaybackQuality('medium'); 
} 

//Fight the Power Original Version

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyFTPOG(event) {  
    fightThePowerOG.setPlaybackQuality('medium'); 
}