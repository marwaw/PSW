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
         // build SELECT query
         $query = "SELECT * FROM Users";
        
         // Connect to MySQL
         if ( !( $database = mysqli_connect("localhost", "root1", "pass") ) )
            die( "<p>Could not connect to database</p></body></html>" );
   
         // open MailingList database
         if ( !mysqli_select_db( $database ,"PSW_DB" ) )
            die( "<p>Could not open  database</p>
               </body></html>" );

         // query MailingList database
         if ( !( $result = mysqli_query( $database,$query ) ) ) 
         {
            print( "<p>Could not execute query!</p>" );
            die( mysql_error() . "</body></html>" );
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