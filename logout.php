<?php
    session_start();

    session_destroy();
    setcookie("user");
    setcookie("session_id");
    header("location:log.php");

    ?>