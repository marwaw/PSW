<!DOCTYPE html>

<!-- Fig. 19.19: readCookies.php -->
<!-- Displaying the cookie�s contents. -->
<html>
   <head>
      <meta charset = "utf-8">
      <title>Zapisane ciasteczka</title>  
      <link rel="stylesheet" type="text/css" href="style_cookies.php" />
      
   </head>
   <body>
      <p>Zapisane ciasteczka:</p>
      <?php
         // iterate through array $_COOKIE and print
         // name and value of each cookie
         foreach ($_COOKIE as $key => $value )
            print( "<p>$key: $value</p>" );
      ?><!-- end PHP script -->
    <p> <a href = "index.php">Powrót</a></p>

   </body>
</html>

