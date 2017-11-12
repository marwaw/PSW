var maxVal = 5;

function init() {
	your_recipe = document.getElementById( "your_recipe" );
}

//tu też cos nie dziala
function getRandomRecipe(nr) {
	var rand = (nr%5);
	var recipe = " ";
	var choice="";

	switch (rand) {
		case 0: recipe = choice="Murzynek"; break;
		case 1: recipe = choice="Tort"; break;
		case 2: recipe = choice="Sernik"; break;
		case 3: recipe = choice="Muffinki"; break;
		case 4: recipe = choice="Dziś nie jedz słodkiego!"; break;
		default: recipe = choice=" ";
	}
	recipe = your_recipe.innerHTML = "Twój przepis: " +choice;
	
}

function getRandom(event) {
    var x = event.which || event.keyCode;
     getRandomRecipe(x);
}

window.addEventListener("load", init, false);
