// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let load = document.getElementById('load');
load.addEventListener('click', function(){

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  player = new YT.Player('player', {
      height: '400',
      width: '600',
      videoId: 'Iy23_K3nGWA',
      playerVars: {
        'controls': 1
      }
  });
});
