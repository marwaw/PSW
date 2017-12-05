<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head> <!-- niewyswietlane info o stronie-->
	<meta charset = "utf-8">
	<title>Menu</title>
	<meta name = "keywords" content = "web page, design,  
         HTML5, tutorial, personal, help, index, form, 
         contact, feedback, list, links, deitel">
    <meta name = "description" content = "oPIS Strony">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style-index.css">
</head>
<body>
	<header>
		<h1>PRZEPIŚNIK</h1>
	</header>

	<nav>Menu
		<ul class = "first-level">
			<li><a href="index.php">Strona główna</a></li>
			<li>Kontakt
				<ul class = "second-level">
					<li><a href="kontakt.html">Napisz do nas</a></li>
					<li>Formularze	
						<ul class = "third-level">
							<li><a href="form.php">Feedback</a></li>
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

	<form id="log-form" method="post" action="log_processing.php">
		<h4></h4>
		<p><label>Login:
            <input name = "user" type = "text"  size = "25" required>
        </label></p>

      	<p><label>Hasło:
            <input name="pass" type = "password" required>
        </label></p>

      <p>
       <input name="login" type = "submit" value = "Wyślij">
       <input id = "reset" type = "reset" value = "Wyczyść" >
    </p> 
	</form>
</div>
<footer>
    &copy;2017 Martyna i Ada
</footer>
</body>
</html>