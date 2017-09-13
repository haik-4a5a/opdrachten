var vid_play = document.querySelector('.player__video');


var play_state = false;

document.querySelector('.player__button').addEventListener("click", function() {
  if (play_state == true) {
    vid_play.pause();
    play_state = false;
  } else if (play_state == false) {
    vid_play.play();
    play_state = true;
  }


});

document.querySelector('.playbackrate').addEventListener("change", function() {
  var playbackrate = document.querySelector('input[type=range][name=playbackRate]').value;
  vid_play.playbackRate = playbackrate;
});

document.querySelector('.vol').addEventListener("change", function() {
  var volume = document.querySelector('input[type=range][name=volume]').value;
  vid_play.volume = volume;
});

document.querySelector('.min').addEventListener("click", function() {
  var min = vid_play.currentTime - 10;

  vid_play.currentTime = min;
});

document.querySelector('.plus').addEventListener("click", function() {
  var plus = vid_play.currentTime + 25;

  vid_play.currentTime = plus;
});

document.querySelector('.player__button').addEventListener("click", function() {
  var duration = vid_play.duration;

  var bar = document.querySelector('.progress__filled');

  setInterval(function() {
    var current = vid_play.currentTime;
    var perc = (current / duration * 100);
    bar.style.flexBasis = perc + '%';

  }, 1000);
});

document.getElementById('progress').addEventListener("click", function(event) {
  var pos = (event.clientX) / this.offsetWidth * 100 - 100;
  vid_play.currentTime = pos / 100 * vid_play.duration;
  bar.style.flexBasis = pos + '%';

});
