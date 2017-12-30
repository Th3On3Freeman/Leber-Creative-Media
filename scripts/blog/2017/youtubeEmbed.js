
// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var butterfly;  
function onYouTubeIframeAPIReady(id) {  

    butterfly = new YT.Player('butterflyVideo', {  
               height: '1280',  
               width: '720',  
               videoId: 'bq-5LDel_CQ',  
               events: {  
                   'onReady': onPlayerReadyB  
               }  
    });  
}  

//Butterfly

// 3. The API will call this function when the video player is ready.  
function onPlayerReadyB(event) {  
    butterfly.setPlaybackQuality('hd720');
}  