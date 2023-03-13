<!DOCTYPE html>  
     <head>  
      <title>Hello World!</title>
     </head>   

     <body>  
      <h1>Hello World!</h1>  
      <p><?php echo 'We are running PHP, version: ' . phpversion(); ?></p>  
      <?php
       $database ="classicmodels";  
       $user = "root";  
       $password = "vincent";  
       $host = "192.168.80.122:8000";  
 
       $conn = mysqli_connect($host, $user, $password, $database);

       $req = "SELECT * FROM customers";
       $res = $conn->query($req);
       $tables = mysqli_fetch_all($res);

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table[0]}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>