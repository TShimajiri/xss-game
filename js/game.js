window.onload = function() {
	selectLevel();
}

function selectLevel(l) {
	if (l > 0) {
		lv = l;
	} else {
		// ハッシュがあればそのレベルに遷移
		if( location.hash ) {
			var hash = location.hash;
			var lv = parseInt(hash.replace("#",""));
		} else {
			var lv = 1;
		}
	}

	if (0 < lv && lv <= 99) {
		$('#level-title').text("Level" + lv);
		gotoLevel(lv);
	} else {
		alert("不正な値です");
	}
}

function gotoLevel (lv) {
	var inputField = document.getElementById('input1');
	if (!inputField) {
		return;
	}

	inputField.value = "http://" + location.host + "/xss-game/question/" + lv + ".php";
	updateFrame(1, inputField.value);
}

function updateFrame (frameNum, url) {
	if (!url) {
		var urlbar = document.getElementById('input' + frameNum); 
		url = urlbar.value;
	};

	// Make sure that the URL points to the frame of the current level
	var frameLink = document.createElement('a');
	frameLink.href = url;

	if (!url.match(/^http?:/) ||
		frameLink.protocol != location.protocol ||
		frameLink.hostname != location.hostname ||
		frameLink.pathname.replace(/^\//, '').search(location.pathname.replace(/^\//, '')) != 0 ||
		frameLink.pathname.search('(\\.|%2[eE])(\\.|%2[eE])') >= 0) {
		alert("Sorry, I can't navigate the frame to that URL.");
		return;
	} else {
		var frame = document.querySelector('iframe');
		frame.src = url; 
	}
}

function setFrameUrl(url) {
	var urlbar = document.getElementById('input1'); 
	urlbar.value = url;
}



