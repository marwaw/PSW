
<?php
 header('Content-Type: text/css');


if(isset($_COOKIE['bg_col'])){
    $bg_col = $_COOKIE['bg_col'];
}
else{
    $bg_col = "grey";
}

if(isset($_COOKIE['font_col'])){
    $font_col = $_COOKIE['font_col'];
}
else{
    $font_col = "black";
}
?>

body {

   background-color: <?=$bg_col?>;
   font-size: 105%;
   color : <?=$font_col?>;;
}

