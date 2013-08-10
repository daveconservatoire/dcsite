var holder;

function playSound(sound){
	lowLag.play(sound);
	holder=sound;
}

function playAgain(){
	lowLag.play(holder);
	$("#playagain").html("testing");
}