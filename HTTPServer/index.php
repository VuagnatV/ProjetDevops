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
       if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
       }

       $req = "SELECT customerName, city FROM customers";
       $res = $conn->query($req)

       if ($res->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customerName"]. "</td><td>" . $row["city"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();
       
      
       
</html>