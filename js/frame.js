
var originalAlert = window.alert;
window.alert = function(s) {
	setTimeout(function() { 
		originalAlert("XSS成功:\n\n" 
			+ s + "\n\n次の問題に進んでください。");
	}, 50);
}

document.addEventListener('DOMContentLoaded', function () {
	// 子フレームのイベント
	var iframeElements = document.getElementsByTagName('iframe');
	for (var i = 0; i < iframeElements.length; i++) {
		iframeElements[i].addEventListener('alert', (function (s) {
			window.console.log(s);
		})(iframeElements[i]), false);
	}
}, false);

