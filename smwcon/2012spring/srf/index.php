<!DOCTYPE html>

<meta charset="utf-8">
<title>SMW result formats</title>
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Your Slides -->
<!-- One section is one slide -->

<?php

$footer = <<<EOT
    <footer>
        <span style="display:block; font-size: 20px;"><a href="http://semantic-mediawiki.org/wiki/SMWCon_Spring_2012">SMWCon Spring 2012</a></span>
        <span style="display:block; font-size: 20px;"><a href="http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw">Jeroen De Dauw</a></span>
        <span style="display:block; font-size: 12px; color: darkgray;"><a href="https://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a></span>
    </footer>
EOT;

?>

<section>
    <h1>Result formats</h1>
	<?php echo $footer; ?>
</section>

<section>
    <h3>In particular...</h3>
    <ul>
        <li>New developments</li>
        <li>Features being worked upon</li>
        <li>The future</li>
    </ul>
</section>

<section>
	<img src="http://placekitten.com/g/800/600">
</section>

<section>
    <h3>SMWCon spring 2011</h3>
    <ul class="incremental">
        <li>SRF 1.5.3, February 9, 2011</li>
        <li>SMW 1.5.6</li>
        <li>MediaWiki 1.16.4</li>
    </ul>
</section>

<section>
	<h3>MW 1.17: resource loader</h3>
	<ul class="incremental">
		<li>Modules and dependencies</li>
		<li>Minifies and combines resources</li>
		<li>Base64 embedded images and RTL</li>
	</ul>
</section>

<section>
	<h3>(Semantic) Maps</h3>
	<ul class="incremental">
		<li>Full usage of resource loader</li>
		<li>Google Maps v2 => v3</li>
		<li>Updates to OpenLayers and GeoNames</li>
		<li>Improved KML support</li>
		<li><a href="https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/examples/advanced_example.html">Marker clustering</a></li>
		<li>Lines and polygons</li>
	</ul>
</section>

<section>
	<img src="images/cluster.png">
</section>

<section>
    <h3>SMW + SRF 1.6.x</h3>
    <ul class="incremental">
        <li><a href="http://semantic-mediawiki.org/wiki/Special:Ask">Better parameter handling</a></li>
        <li>Many fixes</li>
        <li>... and minor feature additions</li>
    </ul>
</section>

<section>
    <h3>SMW + SRF 1.7.x</h3>
    <ul class="incremental">
        <li>Distribution support</li>
        <li>Valuerank format</li>
        <li>D3 formats</li>
        <li>Tree formats</li>
    </ul>
</section>

<section>
    <h3>SMW + SRF 1.8.x: now</h3>
    <ul class="incremental">
        <li>Filtered format</li>
        <li>JitGraph format</li>
    </ul>
</section>

<section>
	<h3><a href="https://github.com/mwjames/docs/tree/master/smwcon-2012">Examples by MWJames</a></h3>
</section>

<section>
	<h3>Filtered format</h3>
	<ul class="incremental" style="margin-left:142px">
		<li>Similar to Exhibit</li>
		<li>Developed by Stephan Gambke</li>
		<li>Funded by <a href="http://www.prescientsoftware.co.uk">Prescient Software</a></li>
		<li><a href="http://www.aroundisleofwight.info/en/Eating_and_Drinking">Example 0: aroundisleofwight.info</a></li>
		<li><a href="http://www.prescientsoftware.co.uk/gateway/index.php/Special:RunQuery/Postcode_Lookup" data-postcode="SO18 2JR">
			Example 1: events for disabled children
		</a></li>
	</ul>
</section>

<section>
    <h3 style="margin-bottom: 20px">Documentation++;</h3>
    <a href="http://semantic-mediawiki.org/wiki/Category:Result_formats">
        <img src="images/formats.png" style="display: block; margin-left: auto;margin-right: auto;" />
    </a>
</section>

<section>
    <h3>Developer docs o_O</h3>
    <ul>
        <li><a href="http://semantic-mediawiki.org/wiki/Writing_result_printers">Link or it didn't happen</a></li>
    </ul>
</section>

<section>
    <h3>The future</h3>
</section>

<section>
	<h3>Client side interactivity</h3>
	<ul class="incremental">
		<li>Continuation</li>
		<li>Filtering</li>
		<li>Aggregation</li>
		<li>Query altering</li>
	</ul>
</section>

<section>
    <h3><a href="https://www.mediawiki.org/wiki/Extension:Spark">Spark</a></h3>
    <ul class="incremental">
        <li>Embedded SPARQL</li>
        <li>Minimal integration required</li>
		<li><a href="http://129.13.109.100/~dropedia/index.php/Level_above_msl_at_AB3149,_AB3148,_AB3143">Example</a></li>
    </ul>
</section>

<section>
    <h3><a href="https://meta.wikimedia.org/wiki/Wikidata">Wikidata?</a></h3>
</section>

<section>
    <h1>Special:Ask</h1>
	<?php echo $footer; ?>
</section>

<section>
    <h3>Special:Links</h3>
    <ul style="margin-left:142px">
        <li><a href="http://semantic-mediawiki.org/wiki/Category:Result_formats">Result format documentation</a></li>
        <li><a href="https://github.com/JeroenDeDauw/smwcon/">These slides on GitHub</a></li>
    </ul>
	<?php echo $footer; ?>
</section>

<section>
	<h3>Special:Attribution</h3>
	<ul class="attribution">
		<li>SMW logo: CC BY-SA 3.0, <a href="http://korrekt.org/">Markus Krötzsch</a></li>
		<li>Background: CC BY-SA 3.0, <a href="http://darklightxiii.deviantart.com/">Cedric Van der Kelen</a></li>
		<li><a href="https://github.com/paulrouget/dzslides">Slide engine</a>: WTFPL, Paul Rouget</li>
		<li>Slides: <a href="https://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>, <a href="https://twitter.com/#!/JeroenDeDauw">Jeroen De Dauw</a></li>
	</ul>
	<?php echo $footer; ?>
</section>


<!-- Your Style -->
<!-- Define the style of your presentation -->

<!-- Maybe a font from http://www.google.com/webfonts ? -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>

<style>
    html { background-color: #f6f6f6; color: black; }
    body { background: url( 'images/bg2.jpeg' ); background-size: 100%;}
        /* A section is a slide. It's size is 800x600, and this will never change */
    section {
        /* The font from Google */
        font-family: 'Ubuntu', arial, serif;
        font-size: 30px;
    }

	ul.attribution {
		margin-left:142px;
		font-size: 15px;
	}

    h1 {
        margin-top: 85px;
    }

    h2 {
        margin-top: 200px;
    }

    h1, h2 {
        text-align: center;
        font-size: 80px;
    }

    h3 {
        margin: 100px 0 50px 100px;
    }

    a {
        text-decoration:none;
        color:black;
    }

    ul {
        margin: 50px 100px 50px 200px;
    }

    p {
        margin: 75px;
        font-size: 50px;
    }

    blockquote {
        height: 100%;
        background-color: black;
        color: white;
        font-size: 60px;
        padding: 50px;
    }
    blockquote:before {
        content: open-quote;
    }
    blockquote:after {
        content: close-quote;
    }

        /* Figures are displayed full-page, with the caption
   on top of the image/video */
    figure {
        background-color: black;
    }
    figcaption {
        margin: 70px;
        font-size: 50px;
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 40px;
        text-align: right;
        background-color: #F6F6F6;
        border-top: 1px solid #CCC;
    }

        /* Transition effect */
        /* Feel free to change the transition effect for original
   animations. See here:
   https://developer.mozilla.org/en/CSS/CSS_transitions
   How to use CSS3 Transitions: */
    section {
        -moz-transition: left 400ms linear 0s;
        -webkit-transition: left 400ms linear 0s;
        -ms-transition: left 400ms linear 0s;
        transition: left 400ms linear 0s;
    }

        /* Before */
    section { left: -150%; }
        /* Now */
    section[aria-selected] { left: 0; }
        /* After */
    section[aria-selected] ~ section { left: +150%; }

        /* Incremental elements */

        /* By default, visible */
    .incremental > * { opacity: 1; }

        /* The current item */
    .incremental > *[aria-selected] { opacity: 1; }

        /* The items to-be-selected */
    .incremental > *[aria-selected] ~ * { opacity: 0.0842; }

        /* The progressbar, at the bottom of the slides, show the global
    progress of the presentation. */
    #progress-bar {
        height: 2px;
        background: #333;
    }

    .smallimg {
        max-height: 400px;
        max-width: 750px;
    }

</style>

<!-- {{{{ dzslides core
#
#
#     __  __  __       .  __   ___  __
#    |  \  / /__` |    | |  \ |__  /__`
#    |__/ /_ .__/ |___ | |__/ |___ .__/ core :€
#
#
# The following block of code is not supposed to be edited.
# But if you want to change the behavior of these slides,
# feel free to hack it!
#
-->

<div id="progress-bar"></div>

<!-- Default Style -->
<style>
    * { margin: 0; padding: 0; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
    details { display: none; }
    body {
        width: 800px; height: 600px;
        margin-left: -400px; margin-top: -300px;
        position: absolute; top: 50%; left: 50%;
        overflow: hidden;
    }
    section {
        position: absolute;
        pointer-events: none;
        width: 100%; height: 100%;
    }
    section[aria-selected] { pointer-events: auto; }
    html { overflow: hidden; }
    body { display: none; }
    body.loaded { display: block; }
    .incremental {visibility: hidden; }
    .incremental[active] {visibility: visible; }
    #progress-bar{
        bottom: 0;
        position: absolute;
        -moz-transition: width 400ms linear 0s;
        -webkit-transition: width 400ms linear 0s;
        -ms-transition: width 400ms linear 0s;
        transition: width 400ms linear 0s;
    }
    figure {
        width: 100%;
        height: 100%;
    }
    figure > * {
        position: absolute;
    }
    figure > img, figure > video {
        width: 100%; height: 100%;
    }
</style>

<script>
var Dz = {
    remoteWindows: [],
    idx: -1,
    step: 0,
    slides: null,
    progressBar : null,
    params: {
        autoplay: "1"
    }
};

Dz.init = function() {
    document.body.className = "loaded";
    this.slides = $$("body > section");
    this.progressBar = $("#progress-bar");
    this.setupParams();
    this.onhashchange();
    this.setupTouchEvents();
    this.onresize();
}

Dz.setupParams = function() {
    var p = window.location.search.substr(1).split('&');
    p.forEach(function(e, i, a) {
        var keyVal = e.split('=');
        Dz.params[keyVal[0]] = decodeURIComponent(keyVal[1]);
    });
    // Specific params handling
    if (!+this.params.autoplay)
        $$.forEach($$("video"), function(v){ v.controls = true });
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

/* Touch Events */

Dz.setupTouchEvents = function() {
    var orgX, newX;
    var tracking = false;

    var db = document.body;
    db.addEventListener("touchstart", start.bind(this), false);
    db.addEventListener("touchmove", move.bind(this), false);

    function start(aEvent) {
        aEvent.preventDefault();
        tracking = true;
        orgX = aEvent.changedTouches[0].pageX;
    }

    function move(aEvent) {
        if (!tracking) return;
        newX = aEvent.changedTouches[0].pageX;
        if (orgX - newX > 100) {
            tracking = false;
            this.forward();
        } else {
            if (orgX - newX < -100) {
                tracking = false;
                this.back();
            }
        }
    }
}

/* Adapt the size of the slides to the window */

Dz.onresize = function() {
    var db = document.body;
    var sx = db.clientWidth / window.innerWidth;
    var sy = db.clientHeight / window.innerHeight;
    var transform = "scale(" + (1/Math.max(sx, sy)) + ")";

    db.style.MozTransform = transform;
    db.style.WebkitTransform = transform;
    db.style.OTransform = transform;
    db.style.msTransform = transform;
    db.style.transform = transform;
}


Dz.getDetails = function(aIdx) {
    var s = $("section:nth-of-type(" + aIdx + ")");
    var d = s.$("details");
    return d ? d.innerHTML : "";
}

Dz.onmessage = function(aEvent) {
    var argv = aEvent.data.split(" "), argc = argv.length;
    argv.forEach(function(e, i, a) { a[i] = decodeURIComponent(e) });
    var win = aEvent.source;
    if (argv[0] === "REGISTER" && argc === 1) {
        this.remoteWindows.push(win);
        this.postMsg(win, "REGISTERED", document.title, this.slides.length);
        this.postMsg(win, "CURSOR", this.idx + "." + this.step);
        return;
    }
    if (argv[0] === "BACK" && argc === 1)
        this.back();
    if (argv[0] === "FORWARD" && argc === 1)
        this.forward();
    if (argv[0] === "START" && argc === 1)
        this.goStart();
    if (argv[0] === "END" && argc === 1)
        this.goEnd();
    if (argv[0] === "TOGGLE_CONTENT" && argc === 1)
        this.toggleContent();
    if (argv[0] === "SET_CURSOR" && argc === 2)
        window.location.hash = "#" + argv[1];
    if (argv[0] === "GET_CURSOR" && argc === 1)
        this.postMsg(win, "CURSOR", this.idx + "." + this.step);
    if (argv[0] === "GET_NOTES" && argc === 1)
        this.postMsg(win, "NOTES", this.getDetails(this.idx));
}

Dz.toggleContent = function() {
    // If a Video is present in this new slide, play it.
    // If a Video is present in the previous slide, stop it.
    var s = $("section[aria-selected]");
    if (s) {
        var video = s.$("video");
        if (video) {
            if (video.ended || video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
    }
}

Dz.setCursor = function(aIdx, aStep) {
    // If the user change the slide number in the URL bar, jump
    // to this slide.
    aStep = (aStep != 0 && typeof aStep !== "undefined") ? "." + aStep : ".0";
    window.location.hash = "#" + aIdx + aStep;
}

Dz.onhashchange = function() {
    var cursor = window.location.hash.split("#"),
            newidx = 1,
            newstep = 0;
    if (cursor.length == 2) {
        newidx = ~~cursor[1].split(".")[0];
        newstep = ~~cursor[1].split(".")[1];
        if (newstep > Dz.slides[newidx - 1].$$('.incremental > *').length) {
            newstep = 0;
            newidx++;
        }
    }
    this.setProgress(newidx, newstep);
    if (newidx != this.idx) {
        this.setSlide(newidx);
    }
    if (newstep != this.step) {
        this.setIncremental(newstep);
    }
    for (var i = 0; i < this.remoteWindows.length; i++) {
        this.postMsg(this.remoteWindows[i], "CURSOR", this.idx + "." + this.step);
    }
}

Dz.back = function() {
    if (this.idx == 1 && this.step == 0) {
        return;
    }
    if (this.step == 0) {
        this.setCursor(this.idx - 1,
                this.slides[this.idx - 2].$$('.incremental > *').length);
    } else {
        this.setCursor(this.idx, this.step - 1);
    }
}

Dz.forward = function() {
    if (this.idx >= this.slides.length &&
            this.step >= this.slides[this.idx - 1].$$('.incremental > *').length) {
        return;
    }
    if (this.step >= this.slides[this.idx - 1].$$('.incremental > *').length) {
        this.setCursor(this.idx + 1, 0);
    } else {
        this.setCursor(this.idx, this.step + 1);
    }
}

Dz.goStart = function() {
    this.setCursor(1, 0);
}

Dz.goEnd = function() {
    var lastIdx = this.slides.length;
    var lastStep = this.slides[lastIdx - 1].$$('.incremental > *').length;
    this.setCursor(lastIdx, lastStep);
}

Dz.setSlide = function(aIdx) {
    this.idx = aIdx;
    var old = $("section[aria-selected]");
    var next = $("section:nth-of-type("+ this.idx +")");
    if (old) {
        old.removeAttribute("aria-selected");
        var video = old.$("video");
        if (video) {
            video.pause();
        }
    }
    if (next) {
        next.setAttribute("aria-selected", "true");
        var video = next.$("video");
        if (video && !!+this.params.autoplay) {
            video.play();
        }
    } else {
        // That should not happen
        this.idx = -1;
        // console.warn("Slide doesn't exist.");
    }
}

Dz.setIncremental = function(aStep) {
    this.step = aStep;
    var old = this.slides[this.idx - 1].$('.incremental > *[aria-selected]');

    if ( this.idx === 4 && aStep === 3 ) { // TODO
        var element = this.slides[this.idx - 1].$( 'h3' );
        element.innerHTML = '<s>' + element.innerHTML + '</s> The stone age';
    }

    if (old) {
        old.removeAttribute('aria-selected');
    }
    var incrementals = $$('.incremental');
    if (this.step <= 0) {
        $$.forEach(incrementals, function(aNode) {
            aNode.removeAttribute('active');
        });
        return;
    }
    var next = this.slides[this.idx - 1].$$('.incremental > *')[this.step - 1];
    if (next) {
        next.setAttribute('aria-selected', true);
        next.parentNode.setAttribute('active', true);
        var found = false;
        $$.forEach(incrementals, function(aNode) {
            if (aNode != next.parentNode)
                if (found)
                    aNode.removeAttribute('active');
                else
                    aNode.setAttribute('active', true);
            else
                found = true;
        });
    } else {
        setCursor(this.idx, 0);
    }
    return next;
}

Dz.goFullscreen = function() {
    var html = $('html'),
            requestFullscreen = html.requestFullscreen || html.requestFullScreen || html.mozRequestFullScreen || html.webkitRequestFullScreen;
    if (requestFullscreen) {
        requestFullscreen.apply(html);
    }
}

Dz.setProgress = function(aIdx, aStep) {
    var slide = $("section:nth-of-type("+ aIdx +")");
    if (!slide)
        return;
    var steps = slide.$$('.incremental > *').length + 1,
            slideSize = 100 / (this.slides.length - 1),
            stepSize = slideSize / steps;
    this.progressBar.style.width = ((aIdx - 1) * slideSize + aStep * stepSize) + '%';
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
    window.onresize = Dz.onresize.bind(Dz);
    window.onhashchange = Dz.onhashchange.bind(Dz);
    window.onmessage = Dz.onmessage.bind(Dz);
}

window.onload = init;
</script>


<script> // Helpers
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

var $ = (HTMLElement.prototype.$ = function(aQuery) {
    return this.querySelector(aQuery);
}).bind(document);

var $$ = (HTMLElement.prototype.$$ = function(aQuery) {
    return this.querySelectorAll(aQuery);
}).bind(document);

$$.forEach = function(nodeList, fun) {
    Array.prototype.forEach.call(nodeList, fun);
}

</script>
<!-- vim: set fdm=marker: }}} -->
