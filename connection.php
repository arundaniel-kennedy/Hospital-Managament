<html>
<head></head>
<body>
  <?php
    //echo "checking data<br>";
    $user = 'root';
    $password = 'root';
    $db = 'hospital';
    $host = 'localhost';
    $port = 3306;

    $link = mysqli_init();
    $per = mysqli_connect($host,$user,$password,$db,$port);

    if (!$per) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //else echo "connection  succeed<br>";
  ?>
</body>
</html>
