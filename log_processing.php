<?php
    session_start();

    $users = array(
        "kucharzyk" => "lubiemurzynki11",
        "blaszka" => "smalecimaslo",
        "admin" => "admin"
    );

//    if (isset($_COOKIE['user'])){
//        header("location:index.php");
//    }

    if (isset($_POST['user'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if (isset($users[$user]) && $users[$user] == $pass) {
            $_SESSION['user'] = $user;
            $_SESSION['timeout'] = time();
            setcookie("user", "$user");
            setcookie("session_id", "user_logged");
            $where = $_SESSION['request'];
            header("location:$where");
        }
        else {
            header('Location: log.php');
        }

    }

?>