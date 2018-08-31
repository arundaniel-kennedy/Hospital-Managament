<html>
<head>
</head>
<body>
  <?php
  include("connection.php");

  $username=$_POST['username'];
  $password = $_POST['password'];
  $count = 0;

  //echo $username." ".$password;

  $sql = "select * from login";
  $result = mysqli_query($per, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($username === $row["username"] && $password === $row["password"]){
          //echo "match found";
          header("refresh:0.0001 ; url=page.php");
        }
        else{
          echo '<script type="text/javascript"> window.alert("Please, Check the Username and Password");</script>';
          header("refresh:0.0001 ; url=index.html");
        }
    }
  }
  else {
    echo "0 results";
  }
  ?>
</body>
</html>
