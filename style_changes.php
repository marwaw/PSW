<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Ciasteczka</title>
      <link rel="stylesheet" type="text/css" href="test.php" />
   </head>
   <body>
<?php 
   define( "SEC30", 30  ); 

   setcookie( "bg_col", $_POST["bg_col"], time() + SEC30 );    
   setcookie( "font_col", $_POST["font_col"], time() + SEC30 );
   #setcookie( "color", $_POST["color"], time() + FIVE_DAYS );  
?>

<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Cookie Saved</title>
      <style type = "text/css">
      </style>
   </head>
   <body>
      <p>Zapisano ciasteczka:</p>
      
      <p>Kolor tla: <?php print( $_POST["bg_col"] ) ?></p>          
      <p>Kolor czcionki: <?php print( $_POST["font_col"] ) ?></p>         
           
      <p>Kliknij i zobacz zapisane <a href = "readCookies.php">ciasteczka</a></p>
   </body>
</html>

