<!DOCTYPE html>  
     <head>  
      <title>Hello World!</title>
     </head>   

     <body>  
      <h1>Hello World!</h1>  
       
      <?php
       $database ="classicmodels";  
       $user = "root";  
       $password = "vincent";  
       $host = "mysql";  
 
       $conn = mysqli_connect($host, $user, $password, $database);

       $req = "SELECT customerName FROM customers";
       $res = $conn->query($req);
       $tables = mysqli_fetch_all($res);

        if (empty($tables)) {
          echo "<p>no data in \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" : customerName from customer :</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table[0]}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>