<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Form Validation</title>
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 50px; }
      </style>
   </head>
   <body>
      <?php
      // checking phone number
         if (!preg_match( "/^\([0-9]{3}-[0-9]{3}-[0-9]{3}\)$/", 
            $_POST["tel"]))
         {
            print( "<p class = 'error'>Niepoprawny format numeru telefonu.</p></body></html>" );
            die(); 
         }
      ?>

      <p><?php  

         $months = array(  
         "Styczeń"   => "brownie",   "Luty" => "szarlotkę",
         "Marzec"     => "miętową czekoladę",   "Kwiecień"    => "mazurek",
         "Maj"       => "kandyzowane fiołki",   "Czerwiec"     => "truskawki w śmietanie",
         "Lipiec"      => "sernik", "Sierpień"   => "sałatkę owocową",
         "Wrzesień" => "deser malinowy",   "Październik"  => "tartę dyniową",
         "Listopad"  => "buraczane brownie", "Grudzień" => "pierniczki" );

         foreach ( $months as $element => $value )
            if(strcmp( $_POST["month"], "$element" ) == 0)
         print( "<p>Twój miesiąc urodzenia to: $element, może masz ochotę na $value ?" . "</p>" );
         ?></p>  

      <p><?php  
         if(( $_POST["month"]) == "Lipiec" )
            print( "<p>Martyna też urodziłą się w lipcu ;)</p>" );
         elseif(( $_POST["month"]) == "Marzec" )
            print( "<p>Ada też urodziłą się w marcu ;)</p>" );
      ?></p>

      <p><?php  
         define("AMOUNT", 10);
         $a = AMOUNT*5+6;
         $a += ++$a;
         // print(gettype($a));
         settype($a, "string"); 
         //print(gettype($a));
         print("To dla Ciebie się rozwijamy! Na początku było tu tylko " . (string)AMOUNT ." przepisow. Teraz jest ich aż " . $a ." !");
         print("<p>Przed zmianą: " . gettype($a) . "</p>");
         $a = 5.5;
         print("<p>Po zmianie: " . gettype($a) . "</p>");
      ?> </p> 

      <p><?php  
         $ip = $_SERVER['REMOTE_ADDR'] ;
         print("Adres ip z którego został wysłany ten formularz to $ip <br/>");
         $req = $_SERVER['REQUEST_METHOD'] ;
         print("Metoda przesłania parametrów formularza to $req");
      ?></p>

      <p><?php
         print("Wpisane przez Ciebie dane:");
         for( reset($_POST); $element = key($_POST); next($_POST)){
            if (is_array($_POST["$element"])){
               print("$element: </p>");
               $array = $_POST["$element"];
               for ( $i = 0; $i < count( $array ); ++$i )
               print( "<p>-$array[$i]</p>");
            }
            else
               print("<p> $element : $_POST[$element]</p>");
         }
      ?></p>

      <p><?php
         $comment = $_POST["comments"];

         //checking if there are words beginning with 'brzydk' and then changing them   
         if (preg_match( "/brzydk[[:alpha:]]/", $comment)){
            print("Twoj komentarz bardzo nas zasmucił, następnym razem rozważ napisanie:");
            while (preg_match( "/\b(brzydk[[:alpha:]]+)\b/i", $comment, $match ) ){
               $comment = preg_replace("/" . $match[ 1 ] . "/", "ładna", $comment);
            }
            print("<p>$comment</p>");
         }
         ?></p>
   </body>
</html>