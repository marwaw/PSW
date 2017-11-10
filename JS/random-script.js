document.getElementById("random-btn").addEventListener("click", getRandomRecipe);
var maxVal = 5;

//tu też cos nie dziala
function getRandomRecipe() {
	var rand = Math.floor(Math.random() * maxVal);
	var recipe = " ";

	switch (rand) {
		case 0: recipe = "Murzynek"; break;
		case 1: recipe = "Tort"; break;
		case 2: recipe = "Sernik"; break;
		case 3: recipe = "Muffinki"; break;
		case 4: recipe = "Dziś nie jedz słodkiego!"; break;
		default: recipe = " ";
	}
	document.getElementById("your_recipe").innerHTML = "Twój przepis: " + recipe;
}
