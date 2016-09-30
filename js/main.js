(function(){
	
	var title,
		titleText,
		titleLetter,
		m = true;

	title = document.getElementById('title');

	if (title) {
		
		titleText = title.firstChild.nodeValue;
		
		title.innerHTML = titleText.slice(0,10) + '<span>n</span>' + titleText.slice(11);
		titleLetter = title.getElementsByTagName('span')[0];
		changeLetter();
		
		setInterval(changeLetter, 6000);
	}

	function changeLetter() {
		if (m) {
			titleLetter.firstChild.nodeValue = 'n';
			title.className = 'warn';
			m = false;
		} else {
			titleLetter.firstChild.nodeValue = 'm';
			title.className = 'warm';
			m = true;
		}
	}
	
}());