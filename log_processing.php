<?php
    session_start();

    if (isset($_COOKIE['user'])){
        header("location:index.php");
    }

    $data_base = mysqli_connect("localhost", "root1", "pass");
    //sprawdź czy jest połączenie z bazą danych
    if (!$data_base)
        die("<p> Nie można się połączyć z bazą danych!</p></body></html>");

    // otwórz bazę danych
    if (!mysqli_select_db($data_base, "PSW_DB"))
        die("<p> Nie można otworzyć bazy danych PSW_DB</p></body></html>");

    // For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries mysqli_query will return a mysqli_result object.
    // For other successful queries it will return TRUE. FALSE on failure

    if (isset($_POST['user'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $query = "SELECT Login FROM Users WHERE Login = '$user' AND Password = '$pass'";

        $result = mysqli_query( $data_base, $query);
        $no_of_rows = mysqli_num_rows($result);

        if ($no_of_rows == 0){
//            print("no of rows:" . mysqli_num_rows($result));
            print( "<p>Nie mozna wykonac działania!</p>" );
            header('Location: log.php');
        }
        else {
            mysqli_close( $data_base );
            
            $_SESSION['user'] = $user;
            $_SESSION['timeout'] = time();
            setcookie("user", "$user");
            setcookie("session_id", "user_logged");
            $where = $_SESSION['request'];
            header("location:$where");
        }

    }

?>