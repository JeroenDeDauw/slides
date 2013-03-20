
var Dz = {
view: null,
url: null,
idx: 1,
count: null,
iframe: null
};

Dz.init = function() {
	this.loadIframe();

	var _this = this;

	this.doLoop = function() {
		_this.view = _this.iframe.contentWindow;

		setTimeout(
			function() {
				if ( _this.view.location.href === 'about:blank' ) {
					window.location = window.location.href.split("#", 2).join( '' );
				}
				else {
					_this.doLoop();
				}
			},
			500
		);

	};

	this.doLoop();
}

Dz.onkeydown = function(aEvent) {
// Don't intercept keyboard shortcuts
if (aEvent.altKey
  || aEvent.ctrlKey
  || aEvent.metaKey
  || aEvent.shiftKey) {
  return;
}
if ( aEvent.keyCode == 37 // left arrow
  || aEvent.keyCode == 38 // up arrow
  || aEvent.keyCode == 33 // page up
) {
  aEvent.preventDefault();
  this.back();
}
if ( aEvent.keyCode == 39 // right arrow
  || aEvent.keyCode == 40 // down arrow
  || aEvent.keyCode == 34 // page down
) {
  aEvent.preventDefault();
  this.forward();
}
if (aEvent.keyCode == 35) { // end
  aEvent.preventDefault();
  this.goEnd();
}
if (aEvent.keyCode == 36) { // home
  aEvent.preventDefault();
  this.goStart();
}
if (aEvent.keyCode == 32) { // space
  aEvent.preventDefault();
  this.toggleContent();
}
if (aEvent.keyCode == 70) { // f
  aEvent.preventDefault();
  this.goFullscreen();
}
}

Dz.onmessage = function(aEvent) {
if (aEvent.source === this.view) {
  var argv = aEvent.data.split(" "), argc = argv.length;
  argv.forEach(function(e, i, a) { a[i] = decodeURIComponent(e) });
  if (argv[0] === "CURSOR" && argc === 2) {
	var cursor = argv[1].split(".");
	this.idx = ~~cursor[0];
	this.step = ~~cursor[1];
	$("#slideidx").value = this.idx;

	var hsh = window.location.hash.split( '#' ).slice( 0, 2 )
	hsh.push( this.idx );
	window.location.hash = hsh.join( '#' );

	$("#back").disabled = this.idx == 1;
	$("#forward").disabled = this.idx == this.count;
  }
  if (argv[0] === "REGISTERED" && argc === 3) {
	$("#slidecount").innerHTML = this.count = argv[2];
	document.title = argv[1];
  }
}
}

/* Get url from hash or prompt and store it */

Dz.getUrl = function() {
var u = window.location.hash.split("#")[1];
if (!u) {
  u = 'maps-is-awesome.html';
  if (u) {
	window.location.hash = u.split("#")[0];
	return u;
  }
  u = "<style>body{background-color:white;color:black}</style>";
  u += "<strong>ERROR:</strong> No URL specified.<br>";
  u += "Try<em>: " + document.location + "#yourslides.html</em>";
  u = "data:text/html," + encodeURIComponent(u);
}

return u + '#' + window.location.hash.split("#")[2];
}

Dz.loadIframe = function() {
this.iframe = $("iframe");
var url = this.getUrl();
this.iframe.src = this.url = url;
this.iframe.onload = function() {
  Dz.view = this.contentWindow;
  Dz.postMsg(Dz.view, "REGISTER");
}
}

Dz.toggleContent = function() {
this.postMsg(this.view, "TOGGLE_CONTENT");
}

Dz.onhashchange = function() {
this.loadIframe();
}

Dz.back = function() {
this.postMsg(this.view, "BACK");
}

Dz.forward = function() {
this.postMsg(this.view, "FORWARD");
}

Dz.goStart = function() {
this.postMsg(this.view, "START");
}

Dz.goEnd = function() {
this.postMsg(this.view, "END");
}

Dz.setCursor = function(aCursor) {
this.postMsg(this.view, "SET_CURSOR", aCursor);
}

Dz.goFullscreen = function() {
var requestFullscreen = this.iframe.requestFullscreen || this.iframe.requestFullScreen || this.iframe.mozRequestFullScreen || this.iframe.webkitRequestFullScreen;
if (requestFullscreen) {
  requestFullscreen.apply(this.iframe);
} else {
  window.open(this.url + "#" + this.idx, '', 'width=800,height=600,personalbar=0,toolbar=0,scrollbars=1,resizable=1');
}
}

Dz.postMsg = function(aWin, aMsg) { // [arg0, [arg1...]]
aMsg = [aMsg];
for (var i = 2; i < arguments.length; i++)
  aMsg.push(encodeURIComponent(arguments[i]));
aWin.postMessage(aMsg.join(" "), "*");
}

function init() {
Dz.init();
window.onkeydown = Dz.onkeydown.bind(Dz);
window.onhashchange = Dz.loadIframe.bind(Dz);
window.onmessage = Dz.onmessage.bind(Dz);
}

var $ = (HTMLElement.prototype.$ = function(aQuery) {
	return this.querySelector(aQuery);
}).bind(document);

var $$ = (HTMLElement.prototype.$$ = function(aQuery) {
	return this.querySelectorAll(aQuery);
}).bind(document);

$$.forEach = function(nodeList, fun) {
	Array.prototype.forEach.call(nodeList, fun);
}

window.onload = init;

if (!Function.prototype.bind) {
Function.prototype.bind = function (oThis) {

  // closest thing possible to the ECMAScript 5 internal IsCallable
  // function
  if (typeof this !== "function")
  throw new TypeError(
	"Function.prototype.bind - what is trying to be fBound is not callable"
  );

  var aArgs = Array.prototype.slice.call(arguments, 1),
	  fToBind = this,
	  fNOP = function () {},
	  fBound = function () {
		return fToBind.apply( this instanceof fNOP ? this : oThis || window,
			   aArgs.concat(Array.prototype.slice.call(arguments)));
	  };

  fNOP.prototype = this.prototype;
  fBound.prototype = new fNOP();

  return fBound;
};
}