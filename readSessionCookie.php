<?php 
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Read Cookie</title>
      <style type = "text/css">
         p       { margin: 0px; }
         p.head  { font-weight: bold; margin-top: 50px; }
      </style>
   </head>
   <body>
   		<p> Session info: </p>
   		<?php
   			foreach ($_COOKIE AS $key => $value)
   				print("<p> $key: $value</p>");
   		?>
      
   </body>
</html>