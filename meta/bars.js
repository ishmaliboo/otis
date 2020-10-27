function addBar(id) {
	var bar = document.getElementById(id);
	
	bar.appendChild(createThumb("img/otto.gif", "img/otto-open.gif"));
	bar.appendChild(createThumb("img/drum.gif", "img/drum-hit.gif"));
	bar.appendChild(createThumb("img/mel.gif", "img/mel-chord.gif"));
}

function createThumb(src, src2) {
	var img = document.createElement('img');
	img.src = src;
	img.setAttribute("class", "thumb");
	
	//var audio = new Audio(snd);
	//img.audio = audio;
	//this.audio.plau;
	
	img.setAttribute("onmouseover", "this.src=\""+src2+"\"")
	img.setAttribute("onmouseout", "this.src=\""+src+"\"")
	
	return img
}