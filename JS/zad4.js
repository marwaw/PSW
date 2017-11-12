function showCoords(event) {
    var cX = event.clientX;
    var sX = event.screenX;
    var cY = event.clientY;
    var sY = event.screenY;
    var coords1 = "klient - X: " + cX + ", Y : " + cY;
    var coords2 = "ekran - X: " + sX + ", Y : " + sY;
    document.getElementById("coords").innerHTML = coords1 + "<br>" + coords2;
}


function isKeyPressed(event) {
    if (event.altKey) {
        document.body.setAttribute( "style", 
      "background-color: blue" ); 
    } 
    if (event.shiftKey) {
        document.body.setAttribute( "style", 
      "background-color: green" ); 
    }if (event.ctrlKey) {
        document.body.setAttribute( "style", 
      "background-color: purple" ); 
    }
 }

 function visitme(){
 	document.getElementById("id1").innerHTML = "Wróć do mnie!";
 }

  function clickme(){
 	document.getElementById("id1").innerHTML = "Zobacz mnie!";
 }