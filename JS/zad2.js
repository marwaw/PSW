var images;
var links;
var imgSources;
var linksSources;

function init() {
	images = document.images;
	links = document.links;
	imgSources =  document.getElementById("images");
	linksSources = document.getElementById("links");
	document.getElementById( "imgSrcBtn" ).addEventListener(
      "click", getImageSrc, false );
	document.getElementById( "linksBtn" ).addEventListener(
      "click", getLinks, false );
}

function getImageSrc() {
    var txt = "";
    var i;
    for (i = 0; i < images.length; i++) {
        txt = txt +  images[i].src + "<br>";
    }
   imgSources.innerHTML = txt;
}

function getLinks() {
    var contents = "<ul>";
    var i;

    for (i = 0; i < links.length; i++) {
        contents +=  "<li><a href = '" + links.item(i).href + "'>" + links.item(i).innerHTML + "</li>";
    }
   linksSources.innerHTML = contents;
}

window.addEventListener("load", init, false);