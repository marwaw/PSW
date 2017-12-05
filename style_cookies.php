
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

if(isset($_COOKIE['font_size'])){
    $font_size = $_COOKIE['font_size'] . "%";
}
else{
    $font_size = "100%";
}
?>

body {

   background-color: <?=$bg_col?>;
   font-size: <?=$font_size?>;
   color : <?=$font_col?>;;
}

