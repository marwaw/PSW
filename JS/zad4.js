function showCoords(event) {
    var cX = event.clientX;
    var sX = event.screenX;
    var cY = event.clientY;
    var sY = event.screenY;
    var coords1 = "klient - X: " + cX + ", Y : " + cY;
    var coords2 = "ekran - X: " + sX + ", Y : " + sY;
    document.getElementById("coords").innerHTML = coords1 + "<br>" + coords2;
}