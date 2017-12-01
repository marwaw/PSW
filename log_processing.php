<?php
session_start();
	
       if ($_POST['login'] == 'user' && $_POST['password'] == '1234') {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = 'user';
          setcookie("user", $_SESSION['username']);
          setcookie("session_id", "user_logged");
          header("location:index.html");
          exit();  
       }
       else {
          header('Location: log.html');
          exit();
       }
 ?>