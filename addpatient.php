<?php
  include 'connection.php';

  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $phone=$_POST['tel'];
  $symptoms=$_POST['symptoms'];
  $admitdate=$_POST['admitdate'];

    $dob='1981-10-07';
    $age = (date('Y') - date('Y',strtotime($age)));

  $sql = "INSERT INTO patient (patientid,name,age,gender,address,phone,symptoms,admitdate) VALUES (null,'$name','$age','$gender','$address','$phone','$symptoms','$admitdate')";

  if (mysqli_query($per, $sql)) {
    echo '<script type="text/javascript"> window.alert("record created successfully");</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($per);
}

  header("refresh:0.0001 ; url=page.php");
 ?>
