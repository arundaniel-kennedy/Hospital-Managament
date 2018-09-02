<?php
  include 'connection.php';

  $patid=$_POST['patid'];
  $roomno=$_POST['roomno'];
  $roomtype=$_POST['roomtype'];
  $food=$_POST['food'];
  $admitdate=$_POST['admitdate'];
  $dischargedate=$_POST['dischargedate'];

  //echo "hello".$patid;

  $sql = "INSERT INTO rooms (roomno,patientid,roomtype,food,admitdate,dischargedate) VALUES (null,$patid,'$roomtype','$food','$admitdate','$dischargedate')";

  if (mysqli_query($per, $sql)) {
    $lastid = mysqli_insert_id($per);
    echo 'Room recordf created successfully with id::'.$lastid;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($per);
}

  header("refresh:3 ; url=page.php");
 ?>
