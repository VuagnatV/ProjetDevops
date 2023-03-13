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

       $req = "SELECT customerName, city FROM customers";
       $res = $conn->query($req);
      
        if(mysqli_num_row($result) > 0) {
            while($data = $result->fetch_assoc()) { 
           echo "<tr><td>" . $data["customerName"]. " </td><td>" . $data["city"]. "</td></tr>";
            } 
        }
        ?>
    </body>
</html>