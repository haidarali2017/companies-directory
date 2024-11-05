window.addEventListener("load", function(event) {
	resizeSignupContainer();
  document.getElementById("fullscreen-bg").style.display = 'block';
}, false);

window.addEventListener("resize", function(event) {
	resizeSignupContainer();
}, false);

function resizeSignupContainer() {
	var vh = vhCheck();
	var signupIconIdHeight = 0;
	if(document.getElementById('signupIconId')) {
		signupIconIdHeight = document.getElementById('signupIconId').getBoundingClientRect().height;
	}
	var signupContainerIdHeight = document.getElementById('signupContainerId').getBoundingClientRect().height;
	/* THE CONTAINER ID: signupContainerId HAS VERTICAL TRANSLATE:
	 * transform: translate(-50%, calc(9.5vh + 190px));
	 */
	var translate = 9.5 * vh.vh / 100 + 190;
  console.log('%csignupContainerIdHeight: '+signupContainerIdHeight+' signupIconIdHeight: '+signupIconIdHeight, 'background: #e19002; color: #a3f5fa');
	if(signupContainerIdHeight + signupIconIdHeight + translate > vh.vh) {
    document.getElementById("fullscreenId").style.height = signupContainerIdHeight + signupIconIdHeight + translate + "px";
		document.getElementById("fullscreen-bg").style.height = signupContainerIdHeight + signupIconIdHeight + translate + "px";
	} else {
    document.getElementById("fullscreenId").style.height = vh.vh + "px";
		document.getElementById("fullscreen-bg").style.height = vh.vh + "px";
	}
	videoAdjust();	
}

var video = document.getElementById("fullscreen-bg-video");
video.onloadstart = function() {
	videoAdjust();
};

function videoAdjust() {
	var playerID = "fullscreen-bg-video";
	var w = window.innerWidth;
	var vh = vhCheck();
	var h;
  var signupIconIdHeight = 0;
	if(document.getElementById('signupIconId')) {
    signupIconIdHeight = document.getElementById('signupIconId').getBoundingClientRect().height;
  }
	var signupContainerIdHeight = document.getElementById('signupContainerId').getBoundingClientRect().height;
	/* THE CONTAINER ID: signupContainerId HAS VERTICAL TRANSLATE:
	 * transform: translate(-50%, calc(9.5vh + 190px));
	 */
	var translate = 9.5 * vh.vh / 100 + 190;	
	if(signupContainerIdHeight + signupIconIdHeight + translate > vh.vh) {
		h = signupContainerIdHeight + signupIconIdHeight + translate;
	} else {
		h = vh.vh;
	}
	var playerW = 1280;
	var playerH = 720;
	if(w / h <= playerW / playerH) {
		document.getElementById(playerID).style.height = h +"px";
		document.getElementById(playerID).style.width = playerW * (h / playerH) + "px";
	} else {
		document.getElementById(playerID).style.width = w + "px";
		document.getElementById(playerID).style.height = playerH * (w / playerW) + "px";
	}	
}