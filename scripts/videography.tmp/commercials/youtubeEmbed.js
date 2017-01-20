
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var paradisePools, bSteps;  
function onYouTubeIframeAPIReady(id) {  

    paradisePools = new YT.Player('ppVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'DpySlOshjjo',  
               events: {  
                   'onReady': onPlayerReadyPP  
               }  
    });  
    
    bSteps = new YT.Player('bStepsVideo', {  
        height: '1280',  
        width: '720',  
        videoId: 'stgnvkLCNEk',  
        events: {  
            'onReady': onPlayerReadyBS  
        }  
    });  
}  
  
//Paradise Pools

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyPP(event) {  
    paradisePools.setPlaybackQuality('hd720');
}  

//bSteps

// 3. The API will call this function when the video player is ready. 
function onPlayerReadyBS(event) {  
    bSteps.setPlaybackQuality('hd720'); 
}  