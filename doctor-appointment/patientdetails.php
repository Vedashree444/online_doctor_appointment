<?php
$patientname = $_POST['patientname'];

$password = $_POST['password'];

  $email = $_POST['email'];
 
 $address = $_POST['address'];
 
 $gender = $_POST['gender'];
 
 $phone = $_POST['phone'];
 
 $age = $_POST['age'];
  

 $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
   
 or die('Error connecting to MySQL server.');

 
 $sql = "INSERT INTO patientdetails(patientname, password, email, address, phone, age, gender) VALUES('$patientname','$password', '$email', '$address','$phone','$age','$gender')";

if (mysqli_query($dbc, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}

    

  mysqli_close($dbc);
?>