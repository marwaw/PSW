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
         if (!preg_match( "/^\([0-9]{3}-[0-9]{3}-[0-9]{3}\)$/", 
            $_POST["tel"]))
         {
            print( "<p class = 'error'>Niepoprawny format numeru telefonu.</p></body></html>" );
            die(); 
         }
      ?><!-- end PHP script -->
    <!--  <p>Hi <?php print( $_POST["fname"] ); ?>. Thank you for 
         completing the survey. You have been added to the 
         <?php print( $_POST["book"] ); ?> mailing list.</p>
      <p class = "head">The following information has been saved 
         in our database:</p>
      <p>Name: <?php print( $_POST["fname"] ); 
         print( $_POST["lname"] ); ?></p>
      <p>Email: <?php print( $_POST["email"] ); ?></p>
      <p>Phone: <?php print( $_POST["phone"] ); ?></p>
      <p>OS: <?php print( $_POST["os"] ); ?></p>
      <p class = "head">This is only a sample form.       
         You have not been added to a mailing list mmmm.</p> -->
         <p>
            <?php  

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
            ?>
         </p>  
         <p>
            <?php  
            if(( $_POST["month"]) == "Lipiec" )
            print( "<p>Martyna też urodziłą się w lipcu ;)</p>" );
         elseif(( $_POST["month"]) == "Marzec" )
            print( "<p>Ada też urodziłą się w marcu ;)</p>" );
            ?>
         </p> 
   </body>
</html>