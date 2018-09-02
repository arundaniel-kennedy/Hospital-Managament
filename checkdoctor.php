<?php
include("connection.php");

$doctorname=$_POST['doctorname'];
$doctorid = $_POST['doctorid'];
$dept= $_POST['dept'];
$time = $_POST['time'];

//echo $doctorid.$doctorname.$dept.$time."<br />";

$sql = "select * from doctor";
$result = mysqli_query($per, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      //echo $row["doctorid"].$row["doctorname"].$row["dept"].$row["time"];

      if($doctorid === $row["doctorid"] && $doctorname === $row["doctorname"] && $dept === $row["dept"] && $time === $row["time"]){
        echo '<script type="text/javascript"> window.alert("Doctor available");</script>';
      }
      else{
        echo '<script type="text/javascript"> window.alert("Doctor not available");</script>';
      }
        header("refresh:0.00001 ; url=page.php");
  }
}
else {
  echo "0 results";
}
