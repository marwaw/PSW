window.addEventListener("load", functionWindow,false);

function functionWindow(){
	window.alert("Strona jest już gotowa :) ");
}


function countIngredients(){ 
	var ing = document.getElementById("ingredientsList");
	 var items = ing.getElementsByTagName("li");
	 var sum = 0;

	for (var i = 0; i < items.length; ++i) {
			sum+=1;
	}
	window.alert("Ten przepis ma " + sum + " składników");
}

function ListIngredients(){ 
	var ing = document.getElementById("ingredientsList");
	var items = ing.getElementsByTagName("li");
	var toBuy = "Do kupienia:" + "<br>";
	var i=0;
	while (i < items.length) {
			  toBuy +=( String( items[i].innerHTML, 10 ) + "<br>" );
			 i++;
	}
	document.writeln(toBuy);
}

// to nie dziala jak jest w osobnym pliku, nie wiem dlaczego
document.getElementById("download-btn").addEventListener("click", displayThanks);

function displayThanks() {
	document.getElementById('thanks').innerHTML = 'Dziękujemy za pobranie przepisu!';
}


