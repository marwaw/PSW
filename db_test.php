<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
      <style type = "text/css">
         table  { background-color: lightblue; 
                  border: 1px solid gray; 
                  border-collapse: collapse; }
         th, td { padding: 5px; border: 1px solid gray; }
         tr:nth-child(even) { background-color: white; }
         tr:first-child { background-color: lightgreen; }
      </style>
   </head>
   <body>
      <?php
//////////////////////////////////
print( "<!-- formularz -->
<form method = 'post' action = 'db_test.php'>
<h2>Filtruj</h2>" );


print( "<div><label>Filtruj login:</label><input type = text
name = filterlogin >" );
print( "</div>" );

print( "<div><label>Filtruj imie:</label><input type = text
name = filterfname >" );
print( "</div>" );

print( "<p><input type = 'submit' name = 'submit'
value = 'GOTOWE'></p></form></body></html>" );

$filterlogin="";
$filterfname = "";

if(isset($_POST["filterlogin"]))
{ $filterlogin = $_POST["filterlogin"];
      print("<p>filtr dla loginu:$filterlogin</p>");
     
}
if(isset($_POST["filterfname"]))
{ $filterfname = $_POST["filterfname"];
      print("<p>filtr dla imienia:$filterfname</p>");
      
}

////////////

      if(($filterlogin =="") && ($filterfname =="")){
        $query = "SELECT * FROM Users"; }
        else if(($filterlogin !="") && ($filterfname !="")){
                 $query = "SELECT * FROM Users WHERE login = '$filterlogin' AND FirstName = '$filterfname'" ;   
            }
     else if(!($filterlogin =="")){

           $query = "SELECT * FROM Users WHERE login = '$filterlogin'";   
      }
      else if(!($filterfname =="")){
            
                       $query = "SELECT * FROM Users WHERE FirstName = '$filterfname'";   
                  }
      else{
            
      }
      

       
        
         if ( !( $database = mysqli_connect("localhost", "root1", "pass") ) )
            die( "<p>Could not connect to database</p></body></html>" );
   
         if ( !mysqli_select_db( $database ,"PSW_DB" ) )
            die( "<p>Could not open  database</p>
               </body></html>" );

         if ( !( $result = mysqli_query( $database,$query ) ) ) 
         {
            print( "<p>Could not execute query!</p>" );
            die( mysqli_error($database) );
         } // end if
      ?><!-- end PHP script -->

      <h1>Użytkownicy</h1>
      <table>
         <caption>Dane w bazie:</caption>
         <tr>
            <th> Id </th>
            <th>Login</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
          
         </tr>
         <?php
            // fetch each record in result set
            for ( $counter = 0; $row = mysqli_fetch_row( $result );
               ++$counter )
            {
               // build table to display results
               print( "<tr>" );

               foreach ( $row as $key => $value ) 
                  print( "<td>$value</td>" );

               print( "</tr>" );
            } // end for

            mysqli_close( $database );
         ?><!-- end PHP script -->
      </table>
   </body>
</html>