var holder;

function playSound(sound){
	lowLag.play(sound);
	holder=sound;
}

function playAgain(){
	lowLag.play(holder);
	$("#playagain").html("Playing").delay(3000).html("Play Again");
}