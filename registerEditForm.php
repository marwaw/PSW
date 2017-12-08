<!DOCTYPE html>
<html>
<head>
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

<div class = "page-content">
    <?php
    // array of name values for the text input fields
    $inputlist = array( "login" => "Login", "password" => "Hasło", "first_name" => "Imię",
        "last_name" => "Nazwisko", "email" => "Email",
        "phone" => "Telefon" );

    print( "<h1>Zarejestruj się / edytuj swoje dane</h1>
            <p>Wypełnij wszystkie pola i naciśnij GOTOWE, aby się zarejestrować</p>" );

    print( "<!-- formularz do rejestrowania/edycji danych -->
            <form method = 'post' action = 'registerEditForm.php'>
            <h2>Informacje o Tobie</h2>" );

//    Tworzenie pól do wypełnienia przez użytkownika
    foreach ( $inputlist as $inputname => $inputalt )
    {
        print( "<div><label>$inputalt:</label><input type = 'text'
               name = '$inputname' value = ''>" );
        print( "</div>" );
    }

    print( "<p><input type = 'submit' name = 'submit'
            value = 'GOTOWE'></p></form></body></html>" );



    ?>
</div>
<footer>
    &copy;2017 Martyna i Ada
</footer>
</body>
</html>