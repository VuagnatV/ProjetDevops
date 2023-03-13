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
       $res = $conn->query($req)
       
      ?>
    </body>
</html>