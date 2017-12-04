<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset = "utf-8">
	<title>Przepiśnik strona główna</title>
	<meta name = "Main" content = " cooking, recipee, baking, dinner, dessert, salads, food">
    <meta name = "description" content = "Ta strona dotyczy gotowania, jest to blog kulinarny, zawiera przepisy.">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style-index.css">
      <script src="JS/zad4.js"></script>

</head>
<body>
<?php
    if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
    {
    $_SESSION['request'] = 'home.php';
    header("Location:Log.php");
    }
    $USER = $_SESSION['use'];
    print("<p>User: $USER</p>");
print("<p><a href='logout.php'> Logout</a></p>");
?>

	<header>
		<h1>PRZEPIŚNIK</h1>
	</header>

	<nav> Menu
		<ul class = "first-level">
			<li><a href="index.html">Strona główna</a></li>
			<li>Kontakt
				<ul class = "second-level">
					<li><a href="kontakt.html">Napisz do nas</a></li>
					<li>Formularze	
						<ul class = "third-level">
							<!--<li><a href="secured.php">Feedback</a></li>-->
							 <li><a href="form.html">Feedback</a></li>
							<li><a href="form2.html">Formularz</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Przydatne
				<ul class = "second-level">
					<li>Tabele 
						<ul class = "third-level">
							<li><a href="tables.html">Przelicznik</a></li>
						</ul>
					</li>
					<li><a href="herbs.html">Zioła</a></li>
					<li><a href="random.html">Wylosuj przepis</a></li>
					<li><a href="makeList.html">Twoja lista</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	<div class = "page-content">
	<section class = "content">

	<h3 id="main">Strona główna</h3>
	
	<p id="welcome">Witaj w naszym <strong>Przepiśniku</strong>! Miło że nas odwiedzasz <sub>&hearts;</sub>&hearts;<sup>&hearts;</sup> <br /> Znajdziesz tutaj wiele ciekawych przepisów na desery, ciasta, koktajle, sałatki, obiady itp.</p>

	<p id="smacznego"><strong>Smacznego!</strong></p>

	<section id = "recipes">

		<h2 id="recipe_title">Przepisy:</h2>

		<article>
			<h3>Murzynek1</h3>
			<a href = "recipe.html"> <img  src = "images/cake.jpg" width = "200"  
		               height = "200" alt = "Zdjęcie ciasta" id="img1" onmouseover="clickme()" 
		               onmouseout="visitme()"></a>
		    <p class="recipe">Przepis na przepyszne ciasto, mocno kakaowe i mocno wilgotne. Pyszny <em>Murzynek</em>!
		    <br/><span id = "id1"></span></p>
	    </article>

	    <article>
			<h3>Murzynek2</h3>
			<a href = "recipe.html"> <img  src = "images/cake.jpg" width = "200"  
		               height = "200" alt = "Zdjęcie ciasta" id="img2"></a>
		    <p>Przepis na przepyszne ciasto, mocno kakaowe i mocno wilgotne. Pyszny <em>Murzynek</em>!</p>
	    </article>

	    <article>
			<h3>Murzynek3</h3>
			<a href = "recipe.html"> <img  src = "images/cake.jpg" width = "200"  
		               height = "200" alt = "Zdjęcie ciasta" id="img3"></a> 
		    <p>Przepis na przepyszne ciasto, mocno kakaowe i mocno wilgotne. Pyszny <em>Murzynek</em>!</p>
	    </article>  

	   	<article >
			<h3>Murzynek4</h3>
			<a href = "recipe.html" id= "meltingimages">
         <img class = "bottom" src = "images/cake2.jpeg" width="200" height="200" alt = "ciasto">
         <img class = "top" src = "images/cake.jpg" width="200" height="200" alt = "ciasto">
      </a>
		    <p>Przepis na przepyszne ciasto, mocno kakaowe i mocno wilgotne. Pyszny <em>Murzynek</em>!</p>
	    </article>  

	</section>




    <p>Powrót do <a href="#recipe_title">przepisów.</a> </p>

	</section>
	</div>
	<footer>
    &copy;2017 Martyna i Ada
	</footer>
</body>
</html>