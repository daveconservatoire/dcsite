//This is the main function that allows keyboard to be jquery plugin

(function( $ ){
	$.fn.keyboard = function() {
		var keySpace=[0,16,25,41,50,75,91,100,116,125,141,150];
		var whiteBlack = ["whitenote","blacknote","whitenote","blacknote","whitenote","whitenote","blacknote","whitenote","blacknote","whitenote","blacknote","whitenote"];
		var k=0;
		for (i=0; i<3; i++) {
		for (j=0; j<12; j++) {
		$(this).append('<div class="'+whiteBlack[j]+'" id="key-'+k+'" style="left: '+(keySpace[j] +(i*175))+'px"><div id="key-'+k+'-marker" class="'+whiteBlack[j]+'-marker"></div></div>');
		k=k+1;
	 }
}
$(this).append('<div class="whitenote" id="key-36" style="left: 525px"></div>');
$('.whitenote-marker, .blacknote-marker').hide();

};
})( jQuery );


soundManager.url = 'http://daveconservatoire.org/keyboard/swf/';
soundManager.flashVersion = 9; // optional: shiny features (default = 8)
soundManager.useFlashBlock = false; // optionally, enable when you're ready to dive in
soundManager.debugMode=false;
/*
 * read up on HTML5 audio support, if you're feeling adventurous.
 * iPad/iPhone and devices without flash installed will always attempt to use it.
*/
soundManager.onready(function() {
for(i=0; i<37; i++){
var mySoundObject = soundManager.createSound({
 id: 'key-'+i,
 url: '/keyboard/soundz/key-'+i+'.mp3'
});
}

for(i=0; i<37; i++){
soundManager.load('key-'+i);
}
});



$(document).ready(function() {

	$('#keyboard').keyboard();
	
	
	$(document).bind("dragstart", function() {
	     return false;
	});
	
	
	$('.whitenote').mousedown(function(){
		var $note = $(this);
		$note.addClass('white-pressed');
		$('key-'+$note.attr("id")+'-marker').show();
		soundManager.play($(this).attr("id"));
	});
	
	$(document).mouseup(function(){
	      $('.whitenote').removeClass('white-pressed');
	});
	    
	$('.blacknote').mousedown(function(){
		var $note = $(this);
		$note.addClass('black-pressed');
		soundManager.play($(this).attr("id"));
	});
	
	$(document).mouseup(function(){
		$('.blacknote').removeClass('black-pressed');
	});
	
	var pitch = parseInt($('select#pitchselect').val());
	var scale = parseInt($('select#scaleselect').val());
	markScale(pitch, scale);

	$('#scaleselect, #pitchselect').change(function() {
		var pitch = parseInt($('select#pitchselect').val());
		var scale = parseInt($('select#scaleselect').val());
		markScale(pitch, scale);
	});
});

function markScale(a,b){
	var scales = {
		0:[12,14,16,17,19,21,23,24],
		1:[12,14,15,17,19,20,22,24],
		2:[12,14,15,17,19,20,23,24],
		3:[12,14,16,18,20,22,24],
		4:[12,14,15,17,18,20,21,23,24],
		5:[12,16,19],
		6:[16,19,24],
		7:[19,24,28],
		8:[12,15,19],
		9:[15,19,24],
		10:[19,24,27],
		11:[12,14,16,17,19,21,23,24],
		12:[12,14,15,17,19,21,22,24],
		13:[12,13,15,17,19,20,22,24],
		14:[12,14,16,18,19,21,23,24],
		15:[12,14,16,17,19,21,22,24],
		16:[12,14,15,17,19,20,22,24],
		17:[12,13,15,17,18,20,22,24],
	};

	if(a==="err"){
		$('.blacknote-marker, .whitenote-marker').hide();
	}
	else{
		$('.blacknote-marker, .whitenote-marker').hide();
		if(a>7){a=a-12};
		for(i=0;i<scales[b].length;i++){
			$('#key-'+(scales[b][i]+a)+'-marker').show();
		}
	}
}

function playKey(key, duration) {
	$('#key-'+key).trigger('mousedown');
	$('#key-'+key+'-marker').show();
    setTimeout(function(){$('#key-'+key).trigger('mouseup');
	$('#key-'+key+'-marker').hide();   
    },duration);
};
	

function playSeries(params){
  for(i=0;i<params.length;i++){
    playKey(params[1],500);
    alert(params[1]);
  }
}

