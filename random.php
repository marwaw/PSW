<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> <!-- niewyswietlane info o stronie-->
	<meta charset = "utf-8">
	<title>Wylosuj</title>
	<meta name = "keywords" content = "web page, design,  
         HTML5, tutorial, personal, help, index, form, 
         contact, feedback, list, links, deitel">
	<meta name = "description" content = "Strona do losowania przepisu">
	<link rel="stylesheet" type="text/css" href="style_cookies.php" />	
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style-index.css">
    <script src="JS/random-script.js"></script>
     <script src="JS/zad4.js"></script>
</head>
<body>

    <?php
        if(!isset($_COOKIE['user'])){
            $_SESSION['request'] = 'random.php';
            header("Location:log.php");
        }

        $USER = $_COOKIE['user'];
        print("<p>User: $USER</p>");
        print("<p><a href='logout.php'> Logout</a></p>");
        print("<p><a href = 'registerEditForm.php'> Edytuj swoje dane</a></p>");
    ?>
	<header>
		<h1>PRZEPIŚNIK</h1>
	</header>

    <nav> Menu
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
                            <li><a href="tables.php">Przelicznik</a></li>
                        </ul>
                    </li>
                    <li><a href="herbs.php">Zioła</a></li>
                    <li><a href="random.php">Wylosuj przepis</a></li>
                    <li><a href="makeList.php">Twoja lista</a></li>
                    <li><a href="style_changes.html">Zmien wygląd strony</a></li>
                </ul>
            </li>
        </ul>
    </nav>

	<div class = "page-content" >
		<p>Nie wiesz co dziś upiec? Wylosuj sobie ciasto!<br/>Wpisz znak:</p>
		<input type="text" size="40" onkeypress="getRandom(event)">
		<p id="your_recipe"> </p>
		<p onmousedown="isKeyPressed(event)">Chcesz zmienić kolor tej strony? Kliknij przytrzymując jeden z klawiszy Ctrl, Alt, Shift :)</p>

	</div>
<footer>
    &copy;2017 Martyna i Ada
</footer>
</body>
</html>