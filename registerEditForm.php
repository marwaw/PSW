<?php
    session_start();
    ?>
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
    $is_register = true;

    $login = isset($_POST[ "login" ]) ? $_POST[ "login" ] : "";
    $password = isset($_POST[ "password" ]) ? $_POST[ "password" ] : "";
    $first_name = isset($_POST[ "first_name" ]) ? $_POST[ "first_name" ] : "";
    $last_name = isset($_POST[ "last_name" ]) ? $_POST[ "last_name" ] : "";
    $email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
    $phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";

    if(isset($_SESSION['user'])){
        $is_register = false;
        $user = $_SESSION["user"];
        $query = "SELECT login, password, LastName, FirstName, email, phone FROM users WHERE login = '$user'";

        $data_base = mysqli_connect("localhost", "root1", "pass");

        //sprawdź czy jest połączenie z bazą danych
        if (!$data_base)
            die("<p> Nie można się połączyć z bazą danych!</p></body></html>");

        // otwórz bazę danych
        if (!mysqli_select_db($data_base, "PSW_DB"))
            die("<p> Nie można otworzyć bazy danych PSW_DB</p></body></html>");

//        For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries mysqli_query will return a mysqli_result object.
//        For other successful queries it will return TRUE. FALSE on failure
        $result = mysqli_query( $data_base, $query);
        if (!$result){
            print( "<p>Nie mozna wykonac działania!</p>" );
            die( mysqli_error($data_base) );
        }
        $row = mysqli_fetch_row($result);

        mysqli_close( $data_base );

        $login = $row[0];
        $password = $row[1];
        $last_name = $row[2];
        $first_name = $row[3];
        $email = $row[4];
        $phone = $row[5];

        print( "<h1>Edytuj swoje dane</h1>
            <p>Wypełnij pola i naciśnij GOTOWE, aby się edytować swoje dane</p>" );
    }

    else {
        print( "<h1>Zarejestruj się</h1>
            <p>Wypełnij wszystkie pola i naciśnij GOTOWE, aby się zarejestrować</p>" );
    }

    $is_error = false;

    // array of name values for the text input fields
    $inputlist = array( "login" => "Login", "password" => "Hasło", "first_name" => "Imię",
        "last_name" => "Nazwisko", "email" => "Email",
        "phone" => "Telefon" );

    print( "<!-- formularz do rejestrowania/edycji danych -->
            <form method = 'post' action = 'registerEditForm.php'>
            <h2>Informacje o Tobie</h2>" );

//    Tworzenie pól do wypełnienia przez użytkownika
    foreach ( $inputlist as $inputname => $inputalt )
    {
        print( "<div><label>$inputalt:</label><input type = $inputname == 'password' ? 'password' : 'text'
               name = '$inputname' value = '" . $$inputname . "'>" );
        print( "</div>" );
    }

    print( "<p><input type = 'submit' name = 'submit'
            value = 'GOTOWE'></p></form></body></html>" );

    if (isset( $_POST["submit"])){
        if ( $login == "" ) {
            $is_error = true;
        }
        //TO DO: sprawdzenie poprawności wpisanych wartości
        // może zapisanie jaki to rodzaj błędu

        if(!$is_error){
            $data_base = mysqli_connect("localhost", "root1", "pass");

            if($is_register){
                $query = "INSERT INTO users (Login, Password, LastName, FirstName, Email,Phone) VALUES ('$login', '$password', '$last_name', '$first_name', '$email', '$phone')";

            }
            else {
//                $user = $_SESSION['user'];
                $query = "UPDATE users
                           SET login = '$login',
                            password = '$password',
                            LastName = '$last_name',
                            FirstName = '$first_name',
                            Email = '$email',
                            phone = '$phone'
                            WHERE login = '$user'";
            }

            //sprawdź czy jest połączenie z bazą danych
            if (!$data_base)
                die("<p> Nie można się połączyć z bazą danych!</p></body></html>");

            // otwórz bazę danych
            if (!mysqli_select_db($data_base, "PSW_DB"))
                die("<p> Nie można otworzyć bazy danych PSW_DB</p></body></html>");

//        For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries mysqli_query will return a mysqli_result object.
//        For other successful queries it will return TRUE. FALSE on failure
            $result = mysqli_query( $data_base, $query);
            if (!$result){
                print( "<p>Nie mozna wykonac działania!</p>" );
                die( mysqli_error($data_base) );
            }

            mysqli_close( $data_base );
            print( "<p>Cześć $first_name, dzięki za rejestrację!</p>
          <p>Następujące informacje zostały zapisane do bazy danych:</p>
          <p>Login: $login</p>
          <p>Imię i nazwisko: $first_name $last_name</p>
          <p>Email: $email</p>
          <p>Telefon: $phone</p>
          </body></html>" );
            die();
        }
    }

    ?>
</div>
<footer>
    &copy;2017 Martyna i Ada
</footer>
</body>
</html>