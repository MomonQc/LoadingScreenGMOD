function randOrd(){
return (Math.round(Math.random())-0.5); }


var neededFiles;
var downloadedFiles = 0;

function DownloadingFile( fileName ) {
	downloadedFiles++;
	refreshProgress();

	setStatus("Downloading files...");
}

function SetStatusChanged( status ) {
	if (status.indexOf("Getting Addon #") != -1) {
		downloadedFiles++;
		refreshProgress();
	}else if (status == "Sending client info...") {
		setProgress(100);
	}

	setStatus(status);
}

function SetFilesNeeded( needed ) {
	neededFiles = needed + 1;
}

function refreshProgress() {
	progress = Math.floor(((downloadedFiles / neededFiles)*100));

	setProgress(progress);
}

function setStatus(text) {
	$("#status").html(text);
}

function setProgress(progress) {
	$("#progress").css("width", progress + "%");
}


function setMusicName(name) {
	$("#music-name").fadeOut(2000, function() {
		$(this).html(name);
		$(this).fadeIn(2000);
	});
}

var youtubePlayer;
var actualMusic = -1;

$(function() {
	musicPlaylist = musicPlaylist.sort( randOrd );

	if (music) {
		loadYoutube();
		$("#music").fadeIn(2000);
	}
});

function loadYoutube() {
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

function onYouTubeIframeAPIReady() {
	youtubePlayer = new YT.Player('player', {
	  height: '390',
	  width: '640',
	  events: {
	    'onReady': onPlayerReady,
	    'onStateChange': onPlayerStateChange
	  }
	});
}

function onPlayerReady(event) {
	youtubePlayer.setVolume(musicVolume);
	nextMusic();
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
    	nextMusic();
	}
}

function nextMusic() {
	actualMusic++;

	if (actualMusic >= musicPlaylist.length) {
		actualMusic = 0;
	}

	var atual = musicPlaylist[actualMusic];
	console.log(atual);

	if (atual.youtube) {
		youtubePlayer.loadVideoById(atual.youtube);
	}else{
		$("body").append('<audio src="'+atual.ogg+'" autoplay>');
		$("audio").prop('volume', musicVolume/100);
		$("audio").bind("ended", function() {
			$(this).remove();
			nextMusic();
		});
	}

	setMusicName(atual.name);
}