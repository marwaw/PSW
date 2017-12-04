<?php
    session_start();

    if (isset($_SESSION['use'])){
        header("location:index.php");
    }

    if (isset($_POST['user'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == 'user' && $pass == '1234') {
            $_SESSION['use'] = $user;
            $_SESSION['timeout'] = time();
//            $_SESSION['username'] = 'user';
            setcookie("user", "$user");
            setcookie("session_id", "user_logged");
            echo '<script type="text/javascript"> window.open("index.php", "_self");</script>';
//            header("location:index.html");
//            exit();
        }
        else {
            header('Location: log.php');
//            exit();
//            echo "invalid username or password";
        }

    }

?>