<?php
  include 'connection.php';

  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $phone=$_POST['tel'];
  $symptoms=$_POST['symptoms'];
  $admitdate=$_POST['admitdate'];
  $age = (date('Y') - date('Y',strtotime($age)));

  $sql = "INSERT INTO patient (patientid,name,age,gender,address,phone,symptoms,admitdate) VALUES (null,'$name','$age','$gender','$address','$phone','$symptoms','$admitdate')";

  if (mysqli_query($per, $sql)) {
    $lastid = mysqli_insert_id($per);
    echo 'Patient Record added successfully with id::'.$lastid;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($per);
}

  header("refresh:3 ; url=page.php");
 ?>
