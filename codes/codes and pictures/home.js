$(document).ready(function(){
	var header = $('body');

	var backgrounds = new Array(
	    'url(firstkid.jpg)'
	  , 'url(secondkid.jpg)'
	);

	var current = 0;

	function nextBackground() {
	    current++;
	    current = current % backgrounds.length;
	    header.css('background-image', backgrounds[current]);
	}
	setInterval(nextBackground, 2500);

	header.css('background-image', backgrounds[0]);
});
	



