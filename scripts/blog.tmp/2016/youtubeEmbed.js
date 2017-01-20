
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var alone;  
function onYouTubeIframeAPIReady(id) {  

    alone = new YT.Player('aloneVideo', {  
               height: '1280',  
               width: '720',  
               videoId: '5p-ZHvSF0WE',  
               events: {  
                   'onReady': onPlayerReadyA  
               }  
    });  
}  

//Inbound

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyA(event) {  
    alone.setPlaybackQuality('hd720');
}  