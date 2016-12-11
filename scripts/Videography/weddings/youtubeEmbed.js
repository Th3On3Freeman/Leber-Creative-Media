// 1. This code loads the IFrame Player API code asynchronously.  
 var tag = document.createElement('script');  
  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
  
// 2. This function creates an <iframe> (and YouTube player) after the API code downloads.  
var player;  
function onYouTubeIframeAPIReady(id) {  
    player = new YT.Player('proposalVideo', {  
        height: '1280',  
        width: '720',  
        videoId: 'OVm87RGMml4',  
        events: {  
            'onReady': onPlayerReady  
        }  
    });  
}  
  
// 3. The API will call this function when the video player is ready.  
function onPlayerReady(event) {  
    player.setPlaybackQuality('hd720'); // Here we set the quality (yay!)    
}  