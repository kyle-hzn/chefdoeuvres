var wavesurfer = WaveSurfer.create({
    container: '#waveform',
    waveColor: '#3498DB',
    progressColor: '#21618C',
    barWidth: '2'
});

wavesurfer.load('/chefdoeuvres/wp-content/themes/chefdoeuvre/assets/Kalash.mp3');
// wavesurfer.on('ready', function () {
//     wavesurfer.play();
// });

var play = document.querySelector('.play');

var play_pause = function () {
    wavesurfer.playPause()
}

play.addEventListener('click', play_pause);