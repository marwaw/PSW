var images; //collection of all images from a current site
var links; //collection of all links from a current site
var imgSources;
var linksSources; 

// register event handlers and initialize variables
function init() {
	images = document.images;
	links = document.links;

	imgSources =  document.getElementById("images");
	linksSources = document.getElementById("links");
  anchorsNumber = document.getElementById("anchors");

  countAnchors();
	document.getElementById( "imgSrcBtn" ).addEventListener(
      "click", getImageSrc, false );
	document.getElementById( "linksBtn" ).addEventListener(
      "click", getLinks, false );
}

// call init after the window loads
window.addEventListener("load", init, false); 

// get sources of all images and set the text
function getImageSrc() {
    var txt = "<ul>";
    var i;
    for (i = 0; i < images.length; i++) {
        txt += "<li>" + images.item(i).src + "</li>";
    }
   imgSources.innerHTML = txt;
}

// get source links
function getLinks() {
  var contents = "";

  contents +=  "<a href = '" + links.namedItem('source1').href + "'>" + links.namedItem('source1').innerHTML + "<br>";
  contents +=  "<a href = '" + links.namedItem('source2').href + "'>" + links.namedItem('source2').innerHTML + "<br>";
  linksSources.innerHTML = contents;
}

function countAnchors() {
     var x = document.anchors.length;
     anchorsNumber.innerHTML = x;
}


